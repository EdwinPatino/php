'use strict' 
let resultado = '';

try{
    //x = 10;
    //si resultado no es un numero mandamos error con throw
    if (isNaN(resultado)) throw 'No es un  numero';
    //si resultado es cadena vacia mandamos error con throw
    else if (resultado === '') throw 'Es cadena vacia';
}
catch(error){
    console.log(error);
    //console.log(error.name);
    //console.log(error.message);
}
finally{
    console.log('Termina revision de errores');
}