var lunas;
const nawales = ["BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
    "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
    "KEME", "KEEJ", "QANIL", "TOJ", "TZI"];
const diass = ["11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13",
    "1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];
// Función para calcular los días transcurridos entre dos fechas
restaFechas = function (f2) {
    var aFecha1 = "07/01/1001".split('/');
    var aFecha2 = f2.split('/');
    var fFecha1 = Date.UTC(aFecha1[2], aFecha1[1] - 1, aFecha1[0]);
    var fFecha2 = Date.UTC(aFecha2[2], aFecha2[1] - 1, aFecha2[0]);
    var dif = fFecha2 - fFecha1;
    var dias = Math.floor(dif / (1000 * 60 * 60 * 24));
    return dias;
}

function calcularNawal() {
    let fecha = document.getElementById("nawalDate").value;
    var fe = fecha.split("-");
    let nfe = fe[2] + "/" + fe[1] + "/" + fe[0];
    diaCholqij(restaFechas(nfe));

    let nAEI = document.querySelector("#nawalAEI")
    nAEI.innerHTML = lunas[0] + " " + lunas[1];
    document.getElementById("imgnAEI").src=baseURL+"/storage/naw/"+lunas[1]+".png";
    let imgAEI =  document.querySelector("#imgnAEI")
    imgAEI.removeAttribute("hidden");
    document.getElementById("mimgnAEI").src=baseURL+"/storage/"+lunas[1]+".png";

    let nE = document.querySelector("#nawalE")
    nE.innerHTML = lunas[2] + " " + lunas[3];
    document.getElementById("imgnE").src=baseURL+"/storage/naw/"+lunas[3]+".png";
    let imgE =  document.querySelector("#imgnE")
    imgE.removeAttribute("hidden");
    document.getElementById("mimgnE").src=baseURL+"/storage/"+lunas[3]+".png";

    let nAED = document.querySelector("#nawalAED")
    nAED.innerHTML = lunas[4] + " " + lunas[5];
    document.getElementById("imgnAED").src=baseURL+"/storage/naw/"+lunas[5]+".png";
    let imgAED =  document.querySelector("#imgnAED")
    imgAED.removeAttribute("hidden");
    document.getElementById("mimgnAED").src=baseURL+"/storage/"+lunas[5]+".png";

    let nAI = document.querySelector("#nawalAI")
    nAI.innerHTML = lunas[6] + " " + lunas[7];
    document.getElementById("imgnAI").src=baseURL+"/storage/naw/"+lunas[7]+".png";
    let imgAI =  document.querySelector("#imgnAI")
    imgAI.removeAttribute("hidden");
    document.getElementById("mimgnAI").src=baseURL+"/storage/"+lunas[7]+".png";

    let n = document.querySelector("#nawal")
    n.innerHTML = lunas[8] + " " + lunas[9];
    document.getElementById("imgn").src=baseURL+"/storage/naw/"+lunas[9]+".png";
    let img =  document.querySelector("#imgn")
    img.removeAttribute("hidden");
    document.getElementById("mimgn").src=baseURL+"/storage/"+lunas[9]+".png";

    let nAD = document.querySelector("#nawalAD")
    nAD.innerHTML = lunas[10] + " " + lunas[11];
    document.getElementById("imgnAD").src=baseURL+"/storage/naw/"+lunas[11]+".png";
    let imgAD =  document.querySelector("#imgnAD")
    imgAD.removeAttribute("hidden");
    document.getElementById("mimgnAD").src=baseURL+"/storage/"+lunas[11]+".png";


    let nADI = document.querySelector("#nawalADI")
    nADI.innerHTML = lunas[12] + " " + lunas[13];
    document.getElementById("imgnADI").src=baseURL+"/storage/naw/"+lunas[13]+".png";
    let imgADI =  document.querySelector("#imgnADI")
    imgADI.removeAttribute("hidden");
    document.getElementById("mimgnADI").src=baseURL+"/storage/"+lunas[13]+".png";

    let nD = document.querySelector("#nawalD")
    nD.innerHTML = lunas[14] + " " + lunas[15];
    document.getElementById("imgnD").src=baseURL+"/storage/naw/"+lunas[15]+".png";
    let imgD =  document.querySelector("#imgnD")
    imgD.removeAttribute("hidden");
    document.getElementById("mimgnD").src=baseURL+"/storage/"+lunas[15]+".png";

    let nADD = document.querySelector("#nawalADD")
    nADD.innerHTML = lunas[16] + " " + lunas[17];
    document.getElementById("imgnADD").src=baseURL+"/storage/naw/"+lunas[17]+".png";
    let imgADD =  document.querySelector("#imgnADD")
    imgADD.removeAttribute("hidden");
    document.getElementById("mimgnADD").src=baseURL+"/storage/"+lunas[17]+".png";




    let tE = document.querySelector("#totalE")
    tE.innerHTML = lunas[18];

    tE.removeAttribute("hidden");
}



















function calcularNawalHoy() {
   
    const tiempoTranscurrido = Date.now();
    const hoy = new Date(tiempoTranscurrido);
    


    diaCholqij(restaFechas(hoy.toLocaleDateString('en-US', { timeZone: 'America/Guatemala' })));

    let nAEI = document.querySelector("#nawalAEI")
    nAEI.innerHTML = lunas[0] + " " + lunas[1];
    document.getElementById("imgnAEI").src=baseURL+"/storage/naw/"+lunas[1]+".png";
    let imgAEI =  document.querySelector("#imgnAEI")
    imgAEI.removeAttribute("hidden");
    document.getElementById("mimgnAEI").src=baseURL+"/storage/"+lunas[1]+".png";

    let nE = document.querySelector("#nawalE")
    nE.innerHTML = lunas[2] + " " + lunas[3];
    document.getElementById("imgnE").src=baseURL+"/storage/naw/"+lunas[3]+".png";
    let imgE =  document.querySelector("#imgnE")
    imgE.removeAttribute("hidden");
    document.getElementById("mimgnE").src=baseURL+"/storage/"+lunas[3]+".png";

    let nAED = document.querySelector("#nawalAED")
    nAED.innerHTML = lunas[4] + " " + lunas[5];
    document.getElementById("imgnAED").src=baseURL+"/storage/naw/"+lunas[5]+".png";
    let imgAED =  document.querySelector("#imgnAED")
    imgAED.removeAttribute("hidden");
    document.getElementById("mimgnAED").src=baseURL+"/storage/"+lunas[5]+".png";

    let nAI = document.querySelector("#nawalAI")
    nAI.innerHTML = lunas[6] + " " + lunas[7];
    document.getElementById("imgnAI").src=baseURL+"/storage/naw/"+lunas[7]+".png";
    let imgAI =  document.querySelector("#imgnAI")
    imgAI.removeAttribute("hidden");
    document.getElementById("mimgnAI").src=baseURL+"/storage/"+lunas[7]+".png";

    let n = document.querySelector("#nawal")
    n.innerHTML = lunas[8] + " " + lunas[9];
    document.getElementById("imgn").src=baseURL+"/storage/naw/"+lunas[9]+".png";
    let img =  document.querySelector("#imgn")
    img.removeAttribute("hidden");
    document.getElementById("mimgn").src=baseURL+"/storage/"+lunas[9]+".png";

    let nAD = document.querySelector("#nawalAD")
    nAD.innerHTML = lunas[10] + " " + lunas[11];
    document.getElementById("imgnAD").src=baseURL+"/storage/naw/"+lunas[11]+".png";
    let imgAD =  document.querySelector("#imgnAD")
    imgAD.removeAttribute("hidden");
    document.getElementById("mimgnAD").src=baseURL+"/storage/"+lunas[11]+".png";


    let nADI = document.querySelector("#nawalADI")
    nADI.innerHTML = lunas[12] + " " + lunas[13];
    document.getElementById("imgnADI").src=baseURL+"/storage/naw/"+lunas[13]+".png";
    let imgADI =  document.querySelector("#imgnADI")
    imgADI.removeAttribute("hidden");
    document.getElementById("mimgnADI").src=baseURL+"/storage/"+lunas[13]+".png";

    let nD = document.querySelector("#nawalD")
    nD.innerHTML = lunas[14] + " " + lunas[15];
    document.getElementById("imgnD").src=baseURL+"/storage/naw/"+lunas[15]+".png";
    let imgD =  document.querySelector("#imgnD")
    imgD.removeAttribute("hidden");
    document.getElementById("mimgnD").src=baseURL+"/storage/"+lunas[15]+".png";

    let nADD = document.querySelector("#nawalADD")
    nADD.innerHTML = lunas[16] + " " + lunas[17];
    document.getElementById("imgnADD").src=baseURL+"/storage/naw/"+lunas[17]+".png";
    let imgADD =  document.querySelector("#imgnADD")
    imgADD.removeAttribute("hidden");
    document.getElementById("mimgnADD").src=baseURL+"/storage/"+lunas[17]+".png";

    let tE = document.querySelector("#totalE")
    tE.innerHTML = lunas[18];
    let txt = document.querySelector("#txt")
    txt.removeAttribute("hidden");

    let fecho = document.querySelector("#fecho")
    fecho.innerHTML = hoy;
    
    fecho.removeAttribute("hidden");

}















function diaCholqij(dias) {

    let n = Math.floor(dias / 260);
    let nn = dias + 1 - n * 260;
    // alert("han pasado " + n + " años y " + nn + " días Cholq'ij");
    detNawal(nn);

}

function detNawal(diasC) {


    let naw = Math.floor(diasC / 20);
    let naww = diasC - naw * 20;
    lunas = lunaciones(diasC - 1, naww - 1);
}

function lunaciones(posDia, posNawal) {


    //me aseguro que nunca se salga del rango creando este array que permitirá recorrer los nawales
    // de las lunaciones sin salir del rango de la constante global nawales[]
    const nawalesp = [
        // primera vuelta
        "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
        "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
        "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
        // segunda vuelta
        "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
        "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
        "KEME", "KEEJ", "QANIL", "TOJ", "TZI",
        // tercera vuelta
        "BATZ", "E", "AJ", "IX", "TZIKIN", "AJMAQ", "NOJ",
        "TIJAX", "KAWOQ", "AJPU", "IMOX", "IQ", "AQABAL", "KAT", "KAN",
        "KEME", "KEEJ", "QANIL", "TOJ", "TZI"];

    let total = parseInt(diass[posDia - 8]) + parseInt(diass[posDia - 1]) + parseInt(diass[posDia - 2]) +
        parseInt(diass[posDia - 6]) + parseInt(diass[posDia + 6]) + parseInt(diass[posDia - 5])
        + parseInt(diass[posDia + 2]) + parseInt(diass[posDia + 1]) + parseInt(diass[posDia]);

    let lunas = [
        //fila engendramiento
        diass[posDia - 1], nawalesp[posNawal + 20 + 6],
        diass[posDia - 8], nawalesp[posNawal + 20 - 8],
        diass[posDia - 2], nawalesp[posNawal + 20 - 2],
        //fila nawal
        diass[posDia - 6], nawalesp[posNawal + 20 - 6],
        diass[posDia], nawalesp[posNawal+20],
        diass[posDia + 6], nawalesp[posNawal + 20 + 6],

        //fila destino
        diass[posDia + 2], nawalesp[posNawal + 20 + 2],
        diass[posDia - 5], nawalesp[posNawal + 20 - 12],
        diass[posDia + 1], nawalesp[posNawal + 20 - 6],
        total
    ];
    return lunas;
}

