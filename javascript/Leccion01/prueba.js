let numbers = "1,2,3/3,2,1";
let cadena = numbers.split("/");
const arreglo = [];
const arreglo1 = [];
const arregloFinal = [];
let cadena1 = cadena[0].split(",");
let cadena2 = cadena[1].split(",");

for(let i of cadena1){
    arreglo.push(i);
}
for(let j of cadena2){
    arreglo1.push(j);
}
for (let k = 0; k<3; k++ ){
    var final = parseInt(cadena1[k]) +parseInt(cadena2[k]);
    arregloFinal.push(final);
}
console.log(arregloFinal);
