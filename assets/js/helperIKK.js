export function getYesterday(num) {
    const date = subHours(new Date(dateYMD(new Date())),0);
    date.setDate(date.getDate() - num) - 1; // Subtract 1 day
    return date;
}

// Function to get tomorrow's date
export function getTomorrow(num) {
    const date = subHours(new Date(dateYMD(new Date())),0);
    date.setDate(date.getDate() + num) + 1; // Add 1 day
    return date;
}

function subHours(date, hours) {
  date.setHours(date.getHours() - hours);

  return date;
}

export function hariIni(){
    return subHours(new Date(new Date().toJSON().slice(0,10)),0);
}

export function getUserObject(){
    return (!isEmptyObject(JSON.parse(getUser()))) ? JSON.parse(getUser()) : JSON.parse('{"data":{"FullName": "", "UserID": ""}}')
} 


export function getUser(){
    return localStorage.getItem('userDetail')
}

export function getToken(){
    return localStorage.getItem('token')
}

export function funcLogout(){
        localStorage.removeItem('token');
        localStorage.removeItem('isLogIn');
}
