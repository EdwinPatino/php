//forma antigua de declarar arreglo
//let autos = new Array('BMW', 'Mercedes Benz', 'volvo');
//forma actual

const autos = ['BMW', 'Mercedes Benz', 'volvo'];
console.log(autos);

//acceder a los elementos del arreglo
console.log(autos[0]);
console.log(autos[1]);
console.log(autos[2]);
for (let i = 0; i < autos.length; i++){
    console.log(i + ' : ' + autos[i]);
}

//Modificar los elementos de un arreglo
autos[1] = 'MercedesBenz';

//agregar elementos a un arreglo
autos.push('Audi');
console.log(autos);

autos[autos.length] = 'Cadillac';
console.log(autos);

//preguntar si es un arreglo
console.log(Array.isArray(autos));
console.log( autos instanceof Array);