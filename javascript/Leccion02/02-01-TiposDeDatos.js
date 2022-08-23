/*
Ejemplos de tipos de datos
*/
//Tipo de dato string
var nombre = "Carlos";
console.log(nombre);

nombre = 10;
console.log(typeof nombre);
//tipo de dato numerico
var numero = 1000;
console.log(numero);
//tipo de dato objeto
var objeto = {
    nombre : "Juan",
    apellido : "perez",
    telefono : "1234567"
}
console.log(objeto);

// tipo de dato booleano
var bandera = true;
console.log(bandera);

//tipo de dato funcion
function miFuncion(){}
console.log(miFuncion);

//tipo de dato symbol
var simbolo = Symbol("mi simbolo");
console.log(simbolo);

//tioo clase es una funcion
class Persona{
    constructor(nombre, apellido){
        this.nombre = nombre;
        this.apellido = apellido;
    }
  
}
console.log(typeof Persona);

//tipo undefined
var x;
console.log(x);

x = undefined;
console.log(x);

// null = ausencia de valor
var y = null;
console.log(y);

// arreglos
var autos = ['bmw','audi','volvo'];
console.log(autos);
console.log(typeof autos);

var z = '';
console.log(z);