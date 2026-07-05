     import { getFirestore, getCountFromServer,sum, collection, addDoc, getAggregateFromServer,updateDoc, deleteDoc, getDoc, getDocs, where, doc, onSnapshot, query, limit, orderBy, startAfter,serverTimestamp, FieldValue, Timestamp } 
        from "https://www.gstatic.com/firebasejs/10.8.0/firebase-firestore.js";
    import {db} from "./config.js"
    import {getTomorrow, getYesterday,hariIni,getUserObject} from "./helperIKK.js"
    import {getIML,getTotalBerat} from "./app_mls.js"

        const stayingRef = collection(db, 'stayingtime')
        
        export async function getAntrian() {
            const antrian = query(stayingRef, 
                where("WaktuAntri", "<=", getTomorrow(1)),
                where("WaktuAntri", ">=", hariIni()),
                //where("Status", "in", ["gi","selesai","proses"])
            )

            const snapshot = await getDocs(antrian);

            if (snapshot.empty) {
                console.log('No matching documents.');
                return 0;
            }


            const dataArray = snapshot.docs.map(doc => ({
            id: doc.id,
            AntriTime: doc.data().WaktuAntri.toDate(),
            ...doc.data()
            }));
            console.log(dataArray)
            return dataArray
        }
        

        export async function getDashboard() {
            /*
            console.log("Besok+1")
            console.log(getTomorrow(1))
            console.log("Besok+0")
            console.log(getTomorrow(0))


            console.log("Bari Ini")

            console.log(hariIni())

            console.log("Kemarin-1")
            console.log(getYesterday(1))
            console.log("Kemarin-0")
            console.log(getYesterday(0))
            */
            try{
            const antriLocal = query(stayingRef, 
                where("WaktuAntri", "<", getTomorrow(1)),
                where("WaktuAntri", ">=", getYesterday(2)),
                where("Tujuan", "==", "Local"),
                where("Status", "==", "antri"))
            
            const prosesLocal = query(stayingRef, 
                where("WaktuAntri", "<", getTomorrow(1)),
                where("WaktuAntri", ">=", getYesterday(2)),
                where("Tujuan", "==", "Local"),
                where("Status", "==", "proses"))

            const selesaiLocal = query(stayingRef, 
                where("WaktuAntri", "<", getTomorrow(1)),
                where("WaktuAntri", ">=", getYesterday(2)),
                where("Tujuan", "==", "Local"),
                where("Status", "==", "selesai"))

            const giLocal = query(stayingRef, 
                where("WaktuAntri", "<", getTomorrow(1)),
                where("WaktuAntri", ">=", hariIni()),
                where("Tujuan", "==", "Local"),
                where("Status", "==", "gi"))

            const batalLocal = query(stayingRef, 
                where("WaktuAntri", "<", hariIni()),
                where("WaktuAntri", ">=", getYesterday(1)),
                where("Tujuan", "==", "Local"),
                where("Status", "==", "batal"))

            const yesterdayGILocal = query(stayingRef, 
                where("WaktuAntri", "<", hariIni()),
                where("WaktuAntri", ">=", getYesterday(1)),
                where("Tujuan", "==", "Local"),
                where("Status", "==", "gi"))

            const antriExport = query(stayingRef, 
                where("WaktuAntri", "<", getTomorrow(1)),
                where("WaktuAntri", ">=", getYesterday(2)),
                where("Tujuan", "==", "Export"),
                where("Status", "==", "antri"))
            
            const prosesExport = query(stayingRef, 
                where("WaktuAntri", "<", getTomorrow(1)),
                where("WaktuAntri", ">=", getYesterday(2)),
                where("Tujuan", "==", "Export"),
                where("Status", "==", "proses"))

            const selesaiExport = query(stayingRef, 
                where("WaktuAntri", "<", getTomorrow(1)),
                where("WaktuAntri", ">=", getYesterday(2)),
                where("Tujuan", "==", "Export"),
                where("Status", "==", "selesai"))
            
            const batalExport = query(stayingRef, 
                where("WaktuAntri", "<", hariIni()),
                where("WaktuAntri", ">=", getYesterday(1)),
                where("Tujuan", "==", "Export"),
                where("Status", "==", "batal"))

            const giExport = query(stayingRef, 
                where("WaktuAntri", "<", getTomorrow(1)),
                where("WaktuAntri", ">=", hariIni()),
                where("Tujuan", "==", "Export"),
                where("Status", "==", "gi"))

            const yesterdayGIExport = query(stayingRef, 
                where("WaktuAntri", "<", hariIni()),
                where("WaktuAntri", ">=", getYesterday(1)),
                where("Tujuan", "==", "Export"),
                where("Status", "==", "gi"))
                
                const antriLocalQuery = await getCountFromServer(antriLocal);
                const prosesLocalQuery = await getCountFromServer(prosesLocal);
                const selesaiLocalQuery = await getCountFromServer(selesaiLocal);
                const giLocalQuery = await getCountFromServer(giLocal);
                const batalLocalQuery = await getCountFromServer(batalLocal);
                const yesterdayGILocalQuery = await getCountFromServer(yesterdayGILocal);

                const antriExportQuery = await getCountFromServer(antriExport);
                const prosesExportQuery = await getCountFromServer(prosesExport);
                const selesaiExportQuery = await getCountFromServer(selesaiExport);
                const giExportQuery = await getCountFromServer(giExport);
                const batalExportQuery = await getCountFromServer(batalExport);
                const yesterdayGIExportQuery = await getCountFromServer(yesterdayGIExport);


                //console.log(tes.data().sum)
                const giLocalQty = await getAggregateFromServer(giLocal, {
                            totalNett: sum('TotalNett')
                            });
                const giExportQty = await getAggregateFromServer(giExport, {
                            totalNett: sum('TotalNett')
                            });
                const giYesterdayLocalQty = await getAggregateFromServer(yesterdayGILocal, {
                            totalNett: sum('TotalNett')
                            });
                const giYesterdayExportQty = await getAggregateFromServer(yesterdayGIExport, {
                            totalNett: sum('TotalNett')
                            });

                const jsonData = {
                    antriLocal: antriLocalQuery.data().count,
                    prosesLocal: prosesLocalQuery.data().count,
                    selesaiLocal: selesaiLocalQuery.data().count,
                    giLocal: giLocalQuery.data().count,
                    batalLocal: batalLocalQuery.data().count,
                    yesterdayGILocal: yesterdayGILocalQuery.data().count,
                    antriExport: antriExportQuery.data().count,
                    prosesExport: prosesExportQuery.data().count,
                    selesaiExport: selesaiExportQuery.data().count,
                    giExport: giExportQuery.data().count,
                    batalExport: batalExportQuery.data().count,
                    yesterdayGIExport: yesterdayGIExportQuery.data().count,
                    giLocalQty: Math.round(giLocalQty.data().totalNett/1000)??0,
                    giExportQty: Math.round(giExportQty.data().totalNett/1000)??0,
                    giYesterdayLocalQty: Math.round(giYesterdayLocalQty.data().totalNett/1000)??0,
                    giYesterdayExportQty: Math.round(giYesterdayExportQty.data().totalNett/1000)??0,

                }

                //console.log(selesaiLocalQuery.data().count)

                console.log(jsonData)
                return jsonData
            }catch (error){
                throw error
            }
            /*
            const snapshot = await getDocs(q);

            if (snapshot.empty) {
                console.log('No matching documents.');
                return 0;
            }


            const dataArray = snapshot.docs.map(doc => ({
            id: doc.id,
            ...doc.data()
            }));
            console.log(dataArray)
            return dataArray
            */
        }

        export async function addStaying(NoIML) {

                    const data = {
                            NoIML:"",
                            NoDN:"",
                            Tujuan:"",
                            Nopol:"",
                            NamaSupir:"",
                            NoHP:"",
                            Ekspedisi:"",
                            Customer:"",
                            WaktuIML:"",
                            WaktuAntri:"",
                            GateNumber:"",
                            OperatorForklift:"",
                            WaktuMuat:"",
                            OperatorMuat:"",
                            WaktuSelesai:"",
                            OperatorSelesai:"",
                            WaktuGI:"",
                            OperatorGI:"",
                            WaktuBatal:"",
                            OperatorBatal:"",
                            Status:"",
                            AmbilSJ:false,
                            Keterangan:""
                        }
                    
                    

                    try {


                        
                        const exist = await readStayingByIML(NoIML)
                        if(exist){
                            throw new Error(`IML Number ${NoIML} sudah pernah di input: ${exist[0].id}`)
                        }

                        const iml = await getIML(NoIML)

                        if(!iml){
                            throw new Error(`IML Number ${NoIML} Tidak Ditemukan`)
                        }
                        console.log(iml)
                        data.Tujuan = (iml.data.NoDN.substring(2, 3) == "O") ? "Export" : "Local"
                        data.NoIML = parseInt(NoIML)
                        data.NoDN = iml.data.NoDN
                        data.Nopol = iml.data.Nopol
                        data.NamaSupir = iml.data.NamaSupir
                        data.Ekspedisi = iml.data.Ekspedisi
                        data.Customer = iml.data.Customer
                        data.WaktuIML = Timestamp.fromDate(new Date(iml.data.Tanggal))
                        data.WaktuAntri = Timestamp.fromDate(new Date())
                        data.WaktuMuat = Timestamp.fromDate(new Date(0))
                        data.WaktuSelesai = Timestamp.fromDate(new Date(0))
                        data.WaktuBatal = Timestamp.fromDate(new Date(0))
                        data.WaktuGI = Timestamp.fromDate(new Date(0))
                        data.Status = "antri"

                        console.log(data)

                        const docRef = await addDoc(stayingRef, data)
                        console.log(`Staingtime added with ID: ${docRef.id}`)
                        return docRef
                        

        
                    } catch (error) {
                        console.error("Error adding export data:", error)
                        throw error
                    } 
                    
                }

                export async function readStayingByIML(NoIML) {
                            const q = query(
                                stayingRef,
                                where('NoIML', '==', parseInt(NoIML))
                            )
                            const snapshot = await getDocs(q);
                
                            if (snapshot.empty) {
                                console.log('No matching documents.')
                                //throw new Error(`IML Number ${NoIML} belum pernah daftar`)
                                return
                            }
                
                            const docs = snapshot.docs.map(doc => ({
                                    id: doc.id,       // Document name/ID
                                    ...doc.data()     // Document fields
                                }));
                            
                            return docs
                }

                export async function updateSelesai(NoIML) {
                    const docs = await readStayingByIML(NoIML)
                    const data = docs[0]
                    const status = docs[0].Status
                    //console.log(docs)

                    if(!docs){
                        throw new Error(`IML Number ${NoIML} belum pernah daftar`)
                    }
                    
                    if(status!="proses"){
                        throw new Error(`IML Number ${NoIML} belum proses muat`)
                    }

                    const id = data.id
                    console.log(id)
                    const stayingRef2 = doc(db, 'stayingtime',id)
                    data.Status = "selesai"
                    
                    data.WaktuSelesai = new Date()
                    data.OperatorSelesai = getUserObject().data.FullName
                    
                    try {
                    const docRef = await updateDoc(stayingRef2, data)

                    // Fetch the document snapshot
                    const docSnap = await getDoc(stayingRef2);

                        if (docSnap.exists()) {
                        console.log("Updated data:", docSnap.data());
                        } else {
                        console.log("Document not found.");
                        throw new Error("Document not found.")
                        }
                        return docSnap

                    } catch (error) {
                        console.error("Error adding stayingtime data:", error)
                        throw error
                    } 
                        
                }

                export async function updateProses(NoIML) {
                    const docs = await readStayingByIML(NoIML)
                    const data = docs[0]
                    const status = docs[0].Status
                    console.log(docs)

                    if(!docs){
                        throw new Error(`IML Number ${NoIML} belum pernah daftar`)
                    }
                    
                    if(status!="antri"){
                        throw new Error(`IML Number ${NoIML} belum antri muat`)
                    }

                    const id = data.id
                    console.log(id)
                    const stayingRef2 = doc(db, 'stayingtime',id)
                    data.Status = "proses"
                    
                    data.WaktuMuat = new Date()
                    data.OperatorMuat = getUserObject().data.FullName
                    
                    try {
                    const docRef = await updateDoc(stayingRef2, data)

                    // Fetch the document snapshot
                    const docSnap = await getDoc(stayingRef2);

                        if (docSnap.exists()) {
                        console.log("Updated data:", docSnap.data());
                        } else {
                        console.log("Document not found.");
                        throw new Error("Document not found.")
                        }
                        return docSnap

                    } catch (error) {
                        console.error("Error adding stayingtime data:", error)
                        throw error
                    } 
                        
                }

                export async function updateGI(NoIML) {
                    console.log(NoIML)
                    
                    
                    
                    try {
                    const docs = await readStayingByIML(NoIML)
                    const berat = await getTotalBerat(NoIML)

                    if(!docs){
                        throw new Error(`IML Number ${NoIML} belum pernah daftar`)
                    }
                    
                    const data = docs[0]
                    const status = docs[0].Status

                    if(status!="selesai"){
                        throw new Error(`IML Number ${NoIML} belum selesai muat`)
                    }

                    const id = data.id
                    console.log(berat)
                    const stayingRef2 = doc(db, 'stayingtime',id)
                    data.Status = "gi"
                    
                    data.WaktuGI = new Date()
                    data.OperatorGI = getUserObject().data.FullName
                    data.TotalNett = berat.totalNett
                    data.TotalGross = berat.totalGross
                    data.TotalRoll = berat.totalRoll

                    const docRef = await updateDoc(stayingRef2, data)

                    // Fetch the document snapshot
                    const docSnap = await getDoc(stayingRef2);

                        if (docSnap.exists()) {
                        console.log("Updated data:", docSnap.data());
                        } else {
                        console.log("Document not found.");
                        throw new Error("Document not found.")
                        }
                        return docSnap

                    } catch (error) {
                        console.error("Error adding stayingtime data:", error)
                        throw error
                    } 
                    
                        
                    
                        
                }

                export async function updateAmbilSJ(NoIML) {
                    console.log(NoIML)
                    
                    
                    
                    try {
                    const docs = await readStayingByIML(NoIML)

                    if(!docs){
                        throw new Error(`IML Number ${NoIML} belum pernah daftar`)
                    }
                    
                    const data = docs[0]
                    const status = docs[0].Status
                    
                    if(status!="gi"){
                        throw new Error(`IML Number ${NoIML} belum surat jalan`)
                    }

                    const id = data.id
                    const stayingRef2 = doc(db, 'stayingtime',id)
                    data.AmbilSJ = true
                    

                    const docRef = await updateDoc(stayingRef2, data)

                    // Fetch the document snapshot
                    const docSnap = await getDoc(stayingRef2);

                        if (docSnap.exists()) {
                        console.log("Updated data:", docSnap.data());
                        } else {
                        console.log("Document not found.");
                        throw new Error("Document not found.")
                        }
                        return docSnap

                    } catch (error) {
                        console.error("Error adding stayingtime data:", error)
                        throw error
                    } 
                    
                        
                    
                        
                }


        