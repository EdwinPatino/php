async function funcionConPromesaYAwait(){
    let miPromesa = new Promise(resolver=> {
        resolver('Promesa con await');
    });
    //await manda llamar a la promesa funcionConPromesaYAwait se procesa esa promesa
    //una vez se ejecute regresa el resultado
    //await solo se puede usar dentro de una funcion declarada con async
    console.log(await miPromesa);
}

funcionConPromesaYAwait();