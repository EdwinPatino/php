//Se toman los elementos que hay en el formulario, este los toma como texto, se convierte en numerico y se suma enviandolos a 
//la variable resutado,
function sumar(){
    const formulario = document.getElementById('formulario');
    let operandoA = formulario['txtOperandoA'];
    let operandoB = formulario['txtOperandoB'];
    let resultado = parseInt(operandoA.value) + parseInt(operandoB.value);
    //si no es un numero no emvia el reslutado
    if(isNaN(resultado)){
        resultado = 'La operación no incluye números';
    }
    document.getElementById('resultado').innerHTML = `Resultado: ${resultado}`;
    
}