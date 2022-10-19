//no se puede cambiar el tipo de variable a saludo no se le pude asignar un 10
let saludo = 'HolaMundo desde TypeScript';

let numero = 10;
//con tipo any se puede asignar cualquier dato
let cualquiera:any;
cualquiera = 10;
cualquiera = 'cadena';
//las constantes se declaran con variables mayusculas y si tien mas de una palabra se separa por _
const PI = 3.14;

function saludar(){
    console.log(saludo);
    console.log(numero);
    console.log(PI);
}

saludar();