let miPromesa = new Promise((resolved, rejected)=>{
    let expresion = true;
    if(expresion){
        resolved('Resolvio correcto');
    }else{
        rejected('Se produjo un error');;
    }
});
//se llama la promesa se ejecuta nuestro codigo
//en caso de que expresion sea verdadero se pasa como parametro resolvio correcto
//se pasa a valor de la linea siguiente, y en caso de falso
//se pasa se produjo un error a error de la siguiente linea
//miPromesa.then(valor => console.log(valor), error => console.log(error));
miPromesa
.then(valor => console.log(valor))
.catch(error => console.log(error));
