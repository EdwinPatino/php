let promesa = new Promise((resolved)=>{
    setTimeout( ()=> resolved('saludos con promesa y setTimeOut'),3000);
});

//Async indica que una funcion regresa una promesa
async function miFuncionConPromesa(){
    return 'Saludos con Promesa y Async';
}

miFuncionConPromesa().then(valor => console.log(valor));