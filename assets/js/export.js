     import { getFirestore, getCountFromServer, collection, addDoc, getAggregateFromServer,updateDoc, deleteDoc, getDoc, getDocs, where, doc, onSnapshot, query, limit, orderBy, startAfter,serverTimestamp, FieldValue, Timestamp } 
        from "https://www.gstatic.com/firebasejs/10.8.0/firebase-firestore.js";
    import {db} from "./config.js"

        const exportRef = collection(db, 'delivery_export')
        const stayingRef = collection(db, 'stayingtime')
        
        function isValidDate(date){
            const tglClosing = new Date(date)
            return tglClosing instanceof Date && !isNaN(tglClosing.getTime())
        }

        function dateFromMonthDay(dayMonth){
            const [day, month] = dayMonth.split("-").map(Number)
            const year = new Date().getFullYear()
            return new Date(year, month -1, day)
        }

         /**
         * Create a Date object from a day-month string (dd-MMM) without specifying a year.
         * Defaults to the current year.
         * 
         * @param {string} dayMonth - e.g., "05-Mar" or "5-Mar"
         * @param {number} [year] - Optional year, defaults to current year
         * @returns {Date|null} - Date object or null if invalid
         */
        function createDateWithoutYear(dayMonth, year = new Date().getFullYear()) {
            // Validate format: dd-MMM (e.g., 05-Mar)
            const regex = /^(\d{1,2})-([A-Za-z]{3})$/;
            const match = dayMonth.match(regex);
            if (!match) {
                console.error("Invalid format. Use dd-MMM, e.g., 05-Mar");
                throw new Error("Invalid format. Use dd-MMM, e.g., 05-Mar");
            }

            const [ , day, monthStr ] = match;
            const monthNames = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
            const monthIndex = monthNames.findIndex(m => m.toLowerCase() === monthStr.toLowerCase());

            if (monthIndex === -1) {
                console.error("Invalid month abbreviation.");
                throw new Error("Invalid month abbreviation.");
            }

            // Create the date
            const date = new Date(year, monthIndex, parseInt(day, 10));

            // Validate that the day is correct (e.g., no Feb 30)
            if (date.getMonth() !== monthIndex || date.getDate() !== parseInt(day, 10)) {
                console.error("Invalid day for the given month.");
                throw new Error("Invalid day for the given month.");
            }

            return date;
        }


        export async function addExport(data) {
            
            const today = new Date()
            const dateOnly = new Date(today.toISOString().split("T")[0])

            let tglClosing = new Date(data.tglClosing)
            if(!isValidDate(data.tglClosing)){
                tglClosing = createDateWithoutYear(data.tglClosing)
            }

            if(tglClosing.getUTCFullYear()<=dateOnly.getUTCFullYear()-1){
                tglClosing = new Date(data.tglClosing+"-"+dateOnly.getUTCFullYear())
            }
            delete data.id
            console.log(tglClosing)
            
            data.tglExport = (typeof data.tglExport != "undefined")?Timestamp.fromDate(data.tglExport):Timestamp.fromDate(dateOnly)
            data.tglClosing = Timestamp.fromDate(tglClosing)
            data.qty = parseInt(data.qty || 0)
            data.HC = parseInt(data.HC || 0)
            data.feet20 = parseInt(data.feet20 || 0)
            data.feet40 = parseInt(data.feet40 || 0)
            console.log(data)
            try {
                const exist = await readExportByDN(data.noDN)
                if(exist){
                    throw new Error(`DN Number ${data.noDN} sudah pernah di input: ${exist[0].id}`)
                }
                const parseData = Object.assign({createdAt: Timestamp.now(),updatedAt: Timestamp.now() }, data);
                console.log(parseData) 
                const docRef = await addDoc(exportRef, parseData)
                console.log(`Export added with ID: ${docRef.id}`)
                return docRef

            } catch (error) {
                console.error("Error adding export data:", error)
                throw error
            } 
            
        }


        async function readExportByID(params) {
            
        }

        async function getStayGI(noDN) {
            const q = query(stayingRef, 
                where("Status", "==", "gi"),
                where("NoDN", "in", noDN));

            const snapshot = await getDocs(q);

            if (snapshot.empty) {
                console.log('No matching documents.');
                return 0;
            }


            const dataArray = snapshot.docs.map(doc => ({
            id: doc.id,
            ...doc.data()
            }));
            const groupedCounts = dataArray.reduce((accumulator, currentItem) => {
            const key = currentItem.NoDN;
            // If the key doesn't exist, initialize its count to 1, otherwise increment it
            accumulator[key] = (accumulator[key] || 0) + 1;
            return accumulator;
            }, {});

            //console.log(groupedCounts);
            
            // Example output: { "GroupA": 5, "GroupB": 10 }
            return groupedCounts
        }

        async function getNonGI(noDN) {
            const q = query(stayingRef, 
                where("Status", "!=", "gi"),
                where("NoDN", "in", noDN));

            const snapshot = await getDocs(q);

            if (snapshot.empty) {
                console.log('No matching documents.');
                return 0;
            }


            const dataArray = snapshot.docs.map(doc => ({
            id: doc.id,
            ...doc.data()
            }));
            const groupedCounts = dataArray.reduce((accumulator, currentItem) => {
            const key = currentItem.NoDN;
            // If the key doesn't exist, initialize its count to 1, otherwise increment it
            accumulator[key] = (accumulator[key] || 0) + 1;
            return accumulator;
            }, {});

            //console.log(groupedCounts);
            
            // Example output: { "GroupA": 5, "GroupB": 10 }
            return groupedCounts
        }

        export async function getStayingSummary(noDN,total) {
            const antri = query(stayingRef, 
                where("NoDN", "==", noDN),
                where('status', '==', "antri")
            )
            const proses = query(stayingRef, 
                where("NoDN", "==", noDN),
                where('status', '==', "antri")
            )
            const selesai = query(stayingRef, 
                where("NoDN", "==", noDN),
                where('status', '==', "antri")
            )
            const gi = query(stayingRef, 
                where("NoDN", "==", noDN),
                where('status', '==', "antri")
            )
            const antriQuery = await getCountFromServer(antri);
            const prosesQuery = await getCountFromServer(proses);
            const selesaiQuery = await getCountFromServer(selesai);
            const giQuery = await getCountFromServer(gi);

            console.log('count with query: ', antriQuery.data().count);
            const result = {
                noDN: noDN,
                antri: antriQuery.data().count,
                proses: prosesQuery.data().count,
                selesai: selesaiQuery.data().count,
                gi: giQuery.data().count,
                belumDatang: total - (antriQuery.data().count + prosesQuery.data().count + selesaiQuery.data().count + selesaiQuery.data().count)
            }
            return result
        }

        

        export async function getStaying(noDN) {
            //const q = query(collection(db, "cities"), where("country", "in", ["USA", "Japan", "Brazil"]));
            const q = query(stayingRef, 
                 where("NoDN", "in", noDN));

            const snapshot = await getDocs(q);

            if (snapshot.empty) {
                console.log('No matching documents.');
                return;
            }

            const docs = snapshot.docs.map(doc => ({
                    id: doc.id,       // Document name/ID
                    ...doc.data()     // Document fields
                }));
            
            return docs
        }

        export async function getMergedExportByDate(from,to){

            
            
        try {
            // Fetch all posts from the 'posts' collection
            const exportData = await readExportByDate(from, to)
            const exportDataDN = exportData.map(doc => doc.noDN)
            const stayingData = await getStaying(exportDataDN)
            const statusGI = await getStayGI(exportDataDN)
            const statusNonGI = await getNonGI(exportDataDN)
            console.log(statusGI)
            const mergedData = exportData.map(obj1 => {
                const matchingObj = stayingData.find(obj2 => obj2.NoDN === obj1.noDN)
                const matchingGI = statusGI[obj1.noDN]
                const matchingNonGI = statusNonGI[obj1.noDN]
                // Use the spread operator to merge properties into a new object
                return {
                    ...obj1, 
                    customer: matchingObj ? matchingObj.Customer : "",
                    ekspedisi: matchingObj ? matchingObj.Ekspedisi : "",
                    done: matchingGI ? matchingGI : 0,
                    proses: matchingNonGI ? matchingNonGI : 0,

                }
            });

            //console.log(mergedData)
            
            return mergedData;
            } catch (error) {
                console.error("Error joining collections:", error);
                throw error;
            }
                
        };

        export async function getMergedClosingByDate(from,to){

            
            
        try {
            // Fetch all posts from the 'posts' collection
            const exportData = await readClosingByDate(from, to)
            if(exportData.length<=0){
                throw new Error("Belum ada BOC")
            }
            const exportDataDN = exportData.map(doc => doc.noDN)
            const stayingData = await getStaying(exportDataDN)
            const statusGI = await getStayGI(exportDataDN)
            const statusNonGI = await getNonGI(exportDataDN)
            console.log(statusGI)
            const mergedData = exportData.map(obj1 => {
                const matchingObj = stayingData.find(obj2 => obj2.NoDN === obj1.noDN)
                const matchingGI = statusGI[obj1.noDN]
                const matchingNonGI = statusNonGI[obj1.noDN]
                const matchingBelum = (parseInt(obj1.HC || 0)+parseInt(obj1.feet20 || 0)+parseInt(obj1.feet40 || 0)) - (matchingGI ? matchingGI : 0 + matchingNonGI ? matchingNonGI : 0)
                // Use the spread operator to merge properties into a new object
                return {
                    ...obj1, 
                    customer: matchingObj ? matchingObj.Customer : "",
                    ekspedisi: matchingObj ? matchingObj.Ekspedisi : "",
                    partai: parseInt(obj1.HC || 0)+parseInt(obj1.feet20 || 0)+parseInt(obj1.feet40 || 0),
                    done: matchingGI ? matchingGI : 0,
                    proses: matchingNonGI ? matchingNonGI : 0,
                    belum: matchingBelum ? matchingBelum : 0
                }
            });

            //console.log(mergedData)
            
            return mergedData;
            } catch (error) {
                console.error("Error joining collections:", error);
                throw error;
            }
                
        };


        export async function readExportByDN(noDN) {

            const q = query(
                exportRef,
                where('noDN', '==', noDN)
            )
            const snapshot = await getDocs(q);

            if (snapshot.empty) {
                console.log('No matching documents.');
                return;
            }

            const docs = snapshot.docs.map(doc => ({
                    id: doc.id,       // Document name/ID
                    ...doc.data()     // Document fields
                }));
            
            return docs
        }

        export async function updateExport(data) {
            const id = data.id
            data.tglExport = Timestamp.fromDate(new Date(data.tglExport))
            data.tglClosing = Timestamp.fromDate(new Date(data.tglClosing))
            delete data.id
            const exportRef2 = doc(db, 'delivery_export',id)
            try {
                const parseData = Object.assign({updatedAt: Timestamp.now() }, data);
                const docRef = await updateDoc(exportRef2, parseData)

            // Fetch the document snapshot
            const docSnap = await getDoc(exportRef2);

                if (docSnap.exists()) {
                console.log("Updated data:", docSnap.data());
                } else {
                console.log("Document not found.");
                throw new Error("Document not found.")
                }
                return docSnap

            } catch (error) {
                console.error("Error adding export data:", error)
                throw error
            } 
        }

        export async function deleteExport(id) {
            const exportRef2 = doc(db, 'delivery_export',id)
            const docSnap = deleteDoc(exportRef2);
            return docSnap
        }
        // Function to read all documents
        export async function readExport(batchSize = 100, lastDoc = 1) {
        try {
            
                const q = query(
                    exportRef,
                    orderBy("tglExport", "asc"),
                    limit(batchSize),
                    startAfter(lastDoc)
                )
                const snapshot = await getDocs(q);
                
          
                const docs = snapshot.docs.map(doc => ({
                    id: doc.id,       // Document name/ID
                    ...doc.data()     // Document fields
                }));

                return docs
            
        } catch (error) {
            console.error("Error fetching export data:", error);
        } 
        }

        export async function readExportByDate(from,to) {
        try {
            console.log(from)
            console.log(to)
            const q = query(
                exportRef,
                where('tglExport', '>=', from),
                where('tglExport', '<=', to),
                //orderBy("__name__"), // Order by document ID
                //orderBy("tglExport", "asc")
            )

            const snapshot = await getDocs(q);
            const docs = snapshot.docs.map(doc => ({
                id: doc.id,       // Document name/ID
                ...doc.data()     // Document fields
            }));
            console.log(docs)
            return docs
        } catch (error) {
            console.error("Error fetching export data:", error);
        }
        }

        export async function readClosingByDate(from,to) {
        try {
            //console.log(from)
            //console.log(to)
            const q = query(
                exportRef,
                where('tglClosing', '>=', from),
                where('tglClosing', '<=', to),
                //orderBy("__name__"), // Order by document ID
                //orderBy("tglExport", "asc")
            )

            const snapshot = await getDocs(q);
            const docs = snapshot.docs.map(doc => ({
                id: doc.id,       // Document name/ID
                ...doc.data()     // Document fields
            }));
            console.log(docs)
            return docs
        } catch (error) {
            console.error("Error fetching export data:", error);
        }
        }


        