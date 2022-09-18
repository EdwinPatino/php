let sumar = function(a, b){
    console.log(arguments[0]);
    console.log(arguments[1]);
    return a + b;
};

resultado = sumar(3, 2);
console.log(resultado);

// valores parametros 4, 5
let suma = function(a = 4, b = 5){
    console.log(arguments[0]);
    console.log(arguments[1]);
    return a + b;
};
//valores argumentos 0 
resultado = suma();
console.log(resultado);