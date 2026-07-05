   import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
import { getDatabase, ref, set, get, update, remove, onValue, child } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-database.js";
import { getFirestore, collection, addDoc, updateDoc, deleteDoc, getDocs, where, doc, onSnapshot, query, orderBy, serverTimestamp, FieldValue, Timestamp } 
        from "https://www.gstatic.com/firebasejs/10.8.0/firebase-firestore.js";
   import {db, rtdb} from "./config.js"
   import {formatNomor} from "./moduleFunction.js"

        const headerBARef = collection(db, 'berita_acara_check');
        const detailBARef = collection(db, 'berita_acara_check_detail');
        const historyRef = collection(db, 'history_number_used');
        

        

        // Function to add a document
        export async function addBeritaAcara(data) {
        try {

            const parseData = Object.assign({createdAt: Timestamp.now() }, data);
            parseData.noBA = await generateNewNumber(new Date(),"Berita Acara Pengecekan")
            parseData.qty = data.listsRoll.reduce((accumulator, currentValue) => {
                                                                    return (accumulator + currentValue.qty); // update accumulator
                                                                    }, 0);
            parseData.count = data.listsRoll.length
            delete parseData.listsRoll
            delete parseData.formField
            console.log(data) 
            const docRef = await addDoc(headerBARef, parseData);
            console.log(`Berita Acara added with ID: ${docRef.id}`);
            const addID = docRef.id
            const listRef = await addBeritaAcaraDetail(addID,parseData.noBA,data.listsRoll)
            return docRef.id

        } catch (error) {
            console.error("Error adding Berita Acara:", error);
        }
        }

        
        async function addBeritaAcaraDetail(id,nomor,data) {
            
            const dataWithID = data.map(item => ({
            ...item, // Keep existing properties
            noBA: nomor,
            id: id,
            }));
            
            //const dataWithID = Object.assign({id: id }, data);
            console.log(data)
            console.log(dataWithID)
            await Promise.
                    all(dataWithID.map(async(item) => {
                        const detailRef = await addDoc(detailBARef, item)
                        console.log(`ID: ${item.id}, Name: ${item.name}`)
                    })).
                    catch(err => {
                        console.log(err)
                        //err.message; // Oops!
                    }).finally(() => {
                        //Alpine.store('globVar').isLoading = false
                    });
                    
        }

        // Function to read data once
        async function readDataOnce(path) {
        try {
            const dbRef = ref(rtdb);
            const snapshot = await get(child(dbRef, path));

            if (snapshot.exists()) {
            //console.log("Data:", snapshot.val());
            return snapshot.val()
            } else {
            console.log("No data available at path:", path);
            }
        } catch (error) {
            console.error("Error reading data:", error);
        }
        }

        // Function to set value
        async function setRtdb(endPoint,value) {
             set(ref(rtdb, endPoint), value)
            .then(() => console.log("Data created successfully"))
            .catch(err => console.error(err));
        }

        async function readRealTime(path) {
            // Read data in real-time
            const usersRef = ref(rtdb, path)
            onValue(usersRef, (snapshot) => {
            const data = snapshot.val()
            console.log(data)
            });
        }
        

        
       
        


        export async function generateNewNumber(date,purpose){
            let endPoint = "runningNumber/PM3"
            let number = await readDataOnce(endPoint)+1
            let hasilNomor = formatNomor(number,date)
            let historyData = {
                no: hasilNomor,
                purpose: purpose,
                date: Timestamp.fromDate(date),
            }
            setRtdb(endPoint,number)
            addDoc(historyRef, historyData);
            return hasilNomor
        }


        // Function to read all documents
        export async function listBeritaAcara() {
        try {
            const snapshot = await getDocs(headerBARef);
            snapshot.forEach(doc => {
            console.log(doc.id, "=>", doc.data());
            });
        } catch (error) {
            console.error("Error fetching Berita Acara:", error);
        }
        }

        export async function listBeritaAcaraByDate(from,to) {
        try {

            const q = query(
                headerBARef,
                where('createdAt', '>=', from),
                where('createdAt', '<=', to)
            );


            const snapshot = await getDocs(q);
            const docs = snapshot.docs.map(doc => ({
                id: doc.id,       // Document name/ID
                ...doc.data()     // Document fields
            }));
            console.log(from)
            console.log(to)
            return docs
        } catch (error) {
            console.error("Error fetching Berita Acara:", error);
        }
        }

        