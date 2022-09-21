let miFuncionFlecha = () =>{
    console.log('saludos desde mi funcion flecha');
}

const miFuncionFlecha2 = () => console.log('saludos desde mi funcion flecha 2');

miFuncionFlecha();
miFuncionFlecha2();

const saludar =()=>{
    return 'Saludos'
}
console.log(saludar());

const saludar2 = () => 'Saludar 2';

console.log(saludar2());

const regresaObleto = () => ({nombre: 'Edwin', apellido: 'Patiño'});

console.log(regresaObleto());

const funcionConParametro = (mensaje) => console.log(mensaje);
//tambien se puede asi
//const funcionConParametro = mensaje => console.log(mensaje);

funcionConParametro('Prueba funcion con parametro');

const variosParametros = (num1, num2) => (num1 + num2);

console.log (variosParametros(12,8));

const variosParametrosOperacionesLargas = (num1, num2, num3) =>{
    let resultado = num1 + num2 + num3;
    return resultado;
}

console.log (variosParametrosOperacionesLargas(3,2,4));