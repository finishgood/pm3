import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
import { getDatabase } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-database.js";
import { getFirestore } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-firestore.js";

        // --- CONFIG FIREBASE ---
        const firebaseConfig = {
            apiKey: "AIzaSyDhspS0BOua1F-Ly7gZ--7Yy0eUlOuTH04",
            authDomain: "fg-ikk.firebaseapp.com",
            projectId: "fg-ikk",
            storageBucket: "fg-ikk.firebasestorage.app",
            databaseURL:"https://fg-ikk-default-rtdb.asia-southeast1.firebasedatabase.app",
            messagingSenderId: "969707272149",
            appId: "1:969707272149:web:fd089239f89fbe7da8af5c",
        };

        const app = initializeApp(firebaseConfig);
        export const db = getFirestore(app);
        export const rtdb = getDatabase(app);


        const firebaseConfigMWH = {
              apiKey: "AIzaSyD8CF5ruXc7AxoGPOx3kmqSSI_1FFWMkrk",
              authDomain: "mwkikkfg.firebaseapp.com",
              databaseURL: "https://mwkikkfg-default-rtdb.firebaseio.com",
              projectId: "mwkikkfg",
              storageBucket: "mwkikkfg.firebasestorage.app",
              messagingSenderId: "181739820908",
              appId: "1:181739820908:web:fdc9c25ce49430053dc549"
        };

        const appMWH = initializeApp(firebaseConfigMWH,"MWH");
        export const rtdbMWH = getDatabase(appMWH);



