"use strict";
//si no definimos una variable sale error, normalmente no sale
// con use strict, es obligatorio definir todas las variables
// se usa al principio del programa o al principio de una funcion

//no definido
//x = 0;
//definida
let y =0;

miFuncion();
function miFuncion(){
    //"use strict";
    let y = 34;
    console.log(y);
}