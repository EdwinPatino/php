'use strict'

try{
    //si hay un error en este bloque genera una excepcion y pasa al bloque catch
    //x = 10;
    let y = 0;
}
catch(error){
    console.log(error);
}
finally{
    //siempre se ejecuta haya error o no
    console.log('Termina revision de errores')
}
//el bloque catch capta el error del programa y nos permite continuar con las otras lineas
console.log('continuamos....')

