import {getUser,getToken,getUserObject} from "./helperIKK.js"

function getServer(){
    return "https://fgd.my.id/proxy/app_mls_service"
    //return "https://fg-ikk.my.id"
}

export async function getIML(NoIML){
    const FORM_ENDPOINT = getServer() + `/api/getDataIMLSelongsong?NoIML=` + NoIML
    
    return await fetch(FORM_ENDPOINT, {
                    method: "GET",
                    headers: {
                        'Authorization': `Bearer ${getToken()}`,
                        "Content-Type": "application/json",
                    },
                    })
                    .then(response => {
                        return response.json()
                    })
                    .then(data => {
                        const result = data
                        console.log(result.Message)
                        if(result.hasOwnProperty('Message')){
                            localStorage.removeItem('token');
                            localStorage.removeItem('isLogIn');
                            throw new Error("Token expired, silahkan login ulang")
                        }
                        console.log(result)
                        return result; // Or .text(), .blob(), etc., depending on content type)
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    })

}

export async function getTotalBerat(IML){
    const result = await getIML(IML)
        let totalGross = 0
        let totalNett = 0
        let totalRoll = 0
        
        totalGross = result.data.MaterialList.reduce((sum, item) => sum + parseInt(item.BrutoSJ), 0);
        totalNett = result.data.MaterialList.reduce((sum, item) => sum + parseInt(item.NettoSJ), 0);
        totalRoll = result.data.MaterialList.reduce((sum, item) => sum + parseInt(item.QtySJ), 0);
        return {
            totalGross: totalGross,
            totalNett: totalNett,
            totalRoll: totalRoll
        }
}

export function login(){

}

export function getUserDetail(){

}