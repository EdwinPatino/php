let a = 3, b = 2, c = '3';

let z = a == b; //se revisa el valor sin importar el tipo
console.log(z);

z = a == c;
console.log(z);

z = a === c; //revisa el valor y tambien los tipos
console.log(z);

// operadores distino a

z = a != c; //se revisa el valor sin importar el tipo
console.log(z);

z = a !== c;  //revisa el valor y tambien los tipos
console.log(z);
