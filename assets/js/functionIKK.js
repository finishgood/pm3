//const devAPIServer = "https://apipd.app.co.id:443/MLS%20Service%20Dev";
//var devAPIServer = "https://apipd.app.co.id:443/MLS%20Service"
var devAPIServer = "https://fgd.my.id/proxy/app_mls_service"
var serverHosting = "https://fgd.my.id"
//var serverHosting = "http://localhost:8080"
//var devAPIServer = "https://fg-ikk-969707272149.asia-southeast2.run.app/proxy/app_mls_service"
//var devAPIServer = "https://ikkarawang.app.co.id/app_mls_service"
const getToken = () => localStorage.getItem('token');
const isLogIn = () =>  localStorage.getItem('isLogIn');
const getUser = () =>  localStorage.getItem('userDetail');
const getUserObject = () => (!isEmptyObject(JSON.parse(getUser()))) ? JSON.parse(getUser()) : JSON.parse('{"data":{"FullName": "", "UserID": ""}}') ;
function isEmptyObject(obj) {
  return Object.keys(obj).length === 0;
}

function cekExist(data){
    return typeof data !== 'undefined' && data ? data[0].total  : 0;
}


function cekExistNett(data){
    return typeof data !== 'undefined' && data ? data[0].totalNett/1000  : 0;
}

const fetchPlus = (url, options = {}, retries) =>
  fetch(url, 
        Object.assign(options,
                      {retryOptions:  {
                  maxAttempts: retries,        // Max 3 retries (4 total attempts)
                  initialDelay: 500,    // Start with 500ms delay
                  backoffFactor: 2.0, // Double delay each time (500ms, 1s, 2s)
                  maxAge: 60000,        // Give up after 60 seconds total retry time
                  retryAfterUnload: true  // Allow retries to continue even if page closes
                  }
              })
            )
              
    //fetch(url, options)
    .then((res) => {
      if (res.status === 401) {
          funcLogout();
      }
      if (res.ok) {
        return res.json()
      }
      if (retries > 0) {
        return fetchPlus(url, options, retries - 1)
      }
      throw new Error(res.status)
    })
    .catch((error) => console.error(error.message));

function indoDate(datetime){
    return new Date(datetime).toLocaleString('id-ID', {
                              day: 'numeric',
                              month: 'short',
                              year: 'numeric'
                           })
}

// Fungsi untuk format tanggal & waktu ke format Indonesia
function formatTanggalIndonesia(date) {

    // Opsi format untuk bahasa Indonesia
    const options = {
        //weekday: 'long',   // nama hari (Senin, Selasa, ...)
        year: 'numeric',
        month: 'short',     // nama bulan (Januari, Februari, ...)
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        //second: '2-digit',
        timeZone: 'Asia/Jakarta', // Zona waktu Indonesia Barat
        hour12: false
    };

    return new Intl.DateTimeFormat('id-ID', options).format(new Date(date));
}

const addOneDay = (dateString) => {
  let [day, month, year] = dateString.split('-')
  const currentDate = new Date(+year, +month - 1, +day)
  currentDate.setDate(currentDate.getDate()+1);
  return padZero(currentDate.getDate()) + '-' + padZero(currentDate.getMonth() + 1) + '-' + currentDate.getUTCFullYear();
}
const addOneDayToDate = (date) => {
  date.setDate(date.getDate() + 1)
  
  return date
}
const currentDate = () => {
  let currentDate = new Date();
  return padZero(currentDate.getDate()) + '-' + padZero(currentDate.getMonth() + 1) + '-' + currentDate.getUTCFullYear();
}

const convertDate = (dateString) => {
  let currentDate = new Date(dateString);
  return padZero(currentDate.getDate()) + '-' + padZero(currentDate.getMonth() + 1) + '-' + currentDate.getUTCFullYear();
}

function getYesterday(num) {
    const date = addHours(new Date(dateYMD(new Date())),7);
    date.setDate(date.getDate() - num -1); // Subtract 1 day
    return date;
}

// Function to get tomorrow's date
function getTomorrow(num) {
    const date = addHours(new Date(dateYMD(new Date())),7);
    date.setDate(date.getDate() + num) + 1; // Add 1 day
    return date;
}

// Function to get tomorrow's date
function getPlusOneDay(datetime) {
    const date = new Date(datetime);
    date.setDate(date.getDate() + 1); // Add 1 day
    return date;
}

const padZero = (num) => num < 10 ? '0' + num : num;

// Arrow function to get the parameter
// of the specified key
getParameter = (key) => {

    // Address of the current window
    address = window.location.search

    // Returns a URLSearchParams object instance
    parameterList = new URLSearchParams(address)

    // Returning the respected value associated
    // with the provided key
    return parameterList.get(key)
}

hariIni = () => {return new Date().toJSON().slice(0,10)}
dateYMD = (date) => {return new Date(date).toJSON().slice(0,10)}
dateYMDHM = (date) => {return new Date(date).toLocaleString('lt-LT')}
const fireBaseTime = (time) => {
                        return new Date(
                        time.seconds * 1000 + time.nanoseconds / 1000000,
                        )
                    }

function subtractHours(date, hours) {
  date.setHours(date.getHours() - hours);

  return date;
}

function addHours(date, hours) {
  date.setHours(date.getHours() + hours);

  return date;
}

function getHHMMDiff(date1, date2) {
  // Get absolute difference in milliseconds
  const diffMs = Math.abs(new Date(date2) - new Date(date1)); 
  
  // Calculate total hours and remaining minutes
  const totalHours = Math.floor(diffMs / (1000 * 60 * 60));
  const remainingMinutes = Math.floor((diffMs % (1000 * 60 * 60)) / (1000 * 60));
  
  // Pad with leading zeros if they are single digits
  const hh = String(totalHours).padStart(2, '0');
  const mm = String(remainingMinutes).padStart(2, '0');
  
  return `${hh}:${mm}`;
}

function groupSelongsongByEkspedisi(dataSelongsong){

    filteredArray = dataSelongsong.map((item,index) => {
        return {
            //name : item.document.name.split('/').pop(),
            NamaSupir: item.document.fields.NamaSupir.stringValue,
            Nopol: item.document.fields.Nopol.stringValue,
            Ekspedisi: item.document.fields.Ekspedisi.stringValue,
            Qty: item.document.fields.Qty.integerValue,
            Posted: item.document.fields.Posted.booleanValue,
              }
    })
        
    const selongsongByEkspedisi = Object.groupBy(filteredArray, (ekspedisi) => ekspedisi.Ekspedisi); 
    const ekspedisiSummary = Object.entries(selongsongByEkspedisi).map(([Ekspedisi, items]) => {
          const JumlahSelongsong = items.reduce((sum, item) => sum + parseInt(item.Qty), 0);
          const JumlahTransaksi = items.length;
          return {
            Ekspedisi,
            JumlahSelongsong,
            JumlahTransaksi
          };
        });
        
    const TotalSelongsong = ekspedisiSummary.reduce((sum, item) => sum + item.JumlahSelongsong, 0);
     const dataWithPercentages = ekspedisiSummary.map(item => ({
      ...item, // Keep existing properties
      Percentage: (item.JumlahSelongsong / TotalSelongsong * 100).toFixed(2),
    }));
    return dataWithPercentages;
}

function groupDeliveryByCustomer(dataDelivery){

    
        
    const deliveryByCustomer = Object.groupBy(dataDelivery, (ekspedisi) => ekspedisi.Customer); 
    const customerSummary = Object.entries(deliveryByCustomer).map(([Customer, items]) => {
          const JumlahTransaksi = items.length;
          return {
            Customer,
            JumlahTransaksi
          };
        });
        
    const TotalDelivery = customerSummary.reduce((sum, item) => sum + item.JumlahTransaksi, 0);
     const dataWithPercentages = customerSummary.map(item => ({
      ...item, // Keep existing properties
      Percentage: (item.JumlahTransaksi / TotalDelivery * 100).toFixed(2),
    }));
    return dataWithPercentages;
}


function groupDeliveryProccess(dataDelivery){

    filteredArray = dataDelivery.map((item,index) => {
        return {
            name : item.document.name.split('/').pop(),
            Status: item.document.fields.Status.stringValue,
            OperatorSelesai: item.document.fields.OperatorSelesai.stringValue,
            Ekspedisi: item.document.fields.Ekspedisi.stringValue,
            Customer: item.document.fields.Customer.stringValue,
            OperatorBatal: item.document.fields.OperatorBatal.stringValue,
            WaktuMuat: item.document.fields.WaktuMuat.timestampValue,
            WaktuSelesai: item.document.fields.WaktuSelesai.timestampValue,
            WaktuIML: item.document.fields.WaktuIML.timestampValue,
            NoHP: item.document.fields.NoHP.stringValue,
            NoDN: item.document.fields.NoDN.stringValue,
            NamaSupir: item.document.fields.NamaSupir.stringValue,
            OperatorMuat: item.document.fields.OperatorMuat.stringValue,
            OperatorGI: item.document.fields.OperatorGI.stringValue,
            Nopol: item.document.fields.Nopol.stringValue,
            OperatorForklift: item.document.fields.OperatorForklift.stringValue,
            GateNumber: item.document.fields.GateNumber.stringValue,
            Keterangan: item.document.fields.Keterangan.stringValue,
            WaktuBatal: item.document.fields.WaktuBatal.timestampValue,
            NoIML: item.document.fields.NoIML.integerValue,
            TotalNett: (typeof item.document.fields.TotalNett != "undefined")?item.document.fields.TotalNett.integerValue:0,
            TotalGross: (typeof item.document.fields.TotalGross != "undefined")?item.document.fields.TotalGross.integerValue:0,
            TotalRoll: (typeof item.document.fields.TotalRoll != "undefined")?item.document.fields.TotalRoll.integerValue:0,
            AmbilSJ: (typeof item.document.fields.AmbilSJ != "undefined")?item.document.fields.AmbilSJ.booleanValue:0,
            Tujuan: (typeof item.document.fields.Tujuan != "undefined")?item.document.fields.Tujuan.stringValue:"",
            WaktuGI: item.document.fields.WaktuGI.timestampValue,
            WaktuAntri: item.document.fields.WaktuAntri.timestampValue
            
              }

    })
    antriData = filteredArray.filter(item =>
    //item.Status === 25 && item.name === 'John');
    item.Status === 'antri');
    prosesData = filteredArray.filter(item =>
    item.Status === 'proses');
    selesaiData = filteredArray.filter(item =>
    item.Status === 'selesai');
    giData = filteredArray.filter(item =>
    item.Status === 'gi');
    batalData = filteredArray.filter(item =>
    item.Status === 'batal');


    return {
      all: filteredArray,
      antri: antriData,
      proses: prosesData,
      selesai: selesaiData,
      gi: giData,
      batal: batalData
    }
        /*
    const selongsongByEkspedisi = Object.groupBy(filteredArray, (ekspedisi) => ekspedisi.Ekspedisi); 
    const ekspedisiSummary = Object.entries(selongsongByEkspedisi).map(([Ekspedisi, items]) => {
          const JumlahSelongsong = items.reduce((sum, item) => sum + parseInt(item.Qty), 0);
          const JumlahTransaksi = items.length;
          return {
            Ekspedisi,
            JumlahSelongsong,
            JumlahTransaksi
          };
        });
        
    const TotalSelongsong = ekspedisiSummary.reduce((sum, item) => sum + item.JumlahSelongsong, 0);
     const dataWithPercentages = ekspedisiSummary.map(item => ({
      ...item, // Keep existing properties
      Percentage: (item.JumlahSelongsong / TotalSelongsong * 100).toFixed(2),
    }));
    return dataWithPercentages;
    */
}

function getMinObject(arr, key) {
    if (!Array.isArray(arr) || arr.length === 0) return null;

    return arr.reduce((minObj, obj) => {
        if (obj && typeof obj[key] === "number") {
            return (minObj === null || obj[key] < minObj[key]) ? obj : minObj;
        }
        return minObj;
    }, null);
}

function getMaxObject(arr, key) {
    if (!Array.isArray(arr) || arr.length === 0) return null;

    return arr.reduce((minObj, obj) => {
        if (obj && typeof obj[key] === "number") {
            return (minObj === null || obj[key] > minObj[key]) ? obj : minObj;
        }
        return minObj;
    }, null);
}
//cheapestProduct = getMinObject(products, "price");



function getBool(val){ 
    var num = +val;
    return !isNaN(num) ? !!num : !!String(val).toLowerCase().replace(!!0,'');
}

function convertMsToTime(milliseconds) {
    let seconds = Math.floor(milliseconds / 1000);
    let minutes = Math.floor(seconds / 60);
    let hours = Math.floor(minutes / 60);

    seconds = seconds % 60;
    minutes = minutes % 60;
    hours = hours % 24;
    //return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}`;
    return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
}

function convertTimeToDurasi(textTime){


    // Konversi ke satuan lain
    let detik = textTime / 1000;
    let menit = detik / 60;
    let jam = menit / 60;

    let textWaktu = (jam>1)?jam.toFixed(2):
                    (menit>1)?menit.toFixed(2):detik.toFixed(2)
    let textSatuan = (jam>1)?"jam":
                    (menit>1)?"menit":"detik"

    return `${textWaktu} ${textSatuan}`
}

function hitungDurasi(waktuMulai, waktuSelesai) {
    if (!(waktuMulai instanceof Date) || !(waktuSelesai instanceof Date)) {
        throw new Error("Parameter harus berupa objek Date");
    }

    // Selisih dalam milidetik
    let selisihMs = waktuSelesai.getTime() - waktuMulai.getTime();

    if (selisihMs < 0) {
        throw new Error("Waktu selesai tidak boleh lebih awal dari waktu mulai");
    }

    // Konversi ke satuan lain
    
    return convertTimeToDurasi(selisihMs)
    /*
    return {
        
        milidetik: selisihMs,
        detik: detik,
        menit: menit,
        jam: jam
    };
    */
}

/**
 * Orders an array of objects based on a given array of keys.
 * Unmatched objects will be placed at the end in their original order.
 *
 * @param {Array<Object>} data - The array of objects to sort.
 * @param {Array} order - The array defining the desired order of values.
 * @param {string} key - The object property to match against the order array.
 * @returns {Array<Object>} - A new sorted array.
 */
function orderByGivenArray(data, order, key) {
    if (!Array.isArray(data) || !Array.isArray(order)) {
        throw new TypeError("Both data and order must be arrays.");
    }
    if (typeof key !== "string") {
        throw new TypeError("Key must be a string.");
    }

    // Create a lookup map for quick index retrieval
    const orderMap = new Map(order.map((value, index) => [value, index]));

    // Sort based on the index in orderMap, unmatched items get Infinity
    return [...data].sort((a, b) => {
        const indexA = orderMap.has(a[key]) ? orderMap.get(a[key]) : Infinity;
        const indexB = orderMap.has(b[key]) ? orderMap.get(b[key]) : Infinity;
        return indexA - indexB;
    });
}

/**
 * Sorts an array of objects by a given key.
 * @param {Array} arr - The array to sort.
 * @param {string} key - The object property to sort by.
 * @param {boolean} [asc=true] - Sort ascending (true) or descending (false).
 * @returns {Array} - A new sorted array.
 */
function sortByKey(arr, key, asc = true) {
  if (!Array.isArray(arr)) {
    throw new TypeError("First argument must be an array");
  }
  if (typeof key !== "string") {
    throw new TypeError("Key must be a string");
  }

  return [...arr].sort((a, b) => {
    // Handle missing keys safely
    const valA = a[key] ?? "";
    const valB = b[key] ?? "";

    if (typeof valA === "number" && typeof valB === "number") {
      return asc ? valA - valB : valB - valA;
    }
    // Compare as strings (case-insensitive)
    return asc
      ? String(valA).localeCompare(String(valB), undefined, { sensitivity: "base" })
      : String(valB).localeCompare(String(valA), undefined, { sensitivity: "base" });
  });
}
