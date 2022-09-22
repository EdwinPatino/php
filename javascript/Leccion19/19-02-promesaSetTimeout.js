let promesa = new Promise((resolved)=>{
    console.log('inicio promesa');
    setTimeout( ()=> resolved('saludos con promesa y setTimeOut'),3000);
    console.log('fin promesa');
});

promesa.then(valor => console.log(valor));