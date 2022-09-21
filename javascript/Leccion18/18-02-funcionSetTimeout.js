//llamadas asincronas con uso setTimeOut

function miFuncionCallBack(){
    console.log('saludo asincrono despues de 3 segundos');
}

setTimeout(miFuncionCallBack, 3000);//despues de 3 segundos, 3000ms
//otra manera de usar setTimeOut
setTimeout(function(){console.log('Saludo 2')}, 5000);
//con funcion flecha
setTimeout(()=> console.log('saludo 3'),1000);