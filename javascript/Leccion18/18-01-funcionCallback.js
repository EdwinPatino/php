//funcion callback: funcion dentro de otra funcion
function imprimir (mensaje){
    console.log(mensaje);
}
function sumar(num1,num2, funcionCallback){
    let resultado = num1 + num2;
    funcionCallback(`Resultado: ${resultado}`);
}

sumar(5,3,imprimir);