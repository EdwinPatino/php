let numero = 5;
let numeroTexto = "Valor incorrecto";

switch(numero){
    case 1:
        numeroTexto = "Numero uno";
        break;
    case 2:
        numeroTexto = "Numero dos";
        break;
    case 3:
        numeroTexto = "Numero tres";
        break;
    case 4:
        numeroTexto = "Numero cuatro";
        break;
    default:
        numeroTexto = "Caso no encontrado";
}

console.log(numeroTexto);