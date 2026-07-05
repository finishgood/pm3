import { getDatabase, ref, set, get, update, remove, onValue, child } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-database.js";
import {rtdb} from "./config.js"


export async function login(userPass) {
    try {
    const user = userPass.username.trim()
    const pass = userPass.password.trim()

    const snap = await get(ref(rtdb, `10uwYFQOh53WdwxZ3pjhsRr271jhHmYvgXKOIz0-v8Bs/Sheet1/${user}`))
    

    

    const data = snap.val();
    console.log(data)
    if (!snap.exists()) {
        throw new Error(`No SAP tidak terdaftar : ${user}`)
    }

    if (data.password === pass) {
        localStorage.setItem("isLogIn", "true");
        localStorage.setItem("nama", data.nama);
        localStorage.setItem("sap", user);
        return {user:user, nama:data.nama}
    } else {
    
        throw new Error(`Password salah, user : ${user}`);
    }

    } catch (err) {
        console.error(err);
            throw err
    }
            
}
export async function getUserDetail(nik) {
    console.log(nik)
}
