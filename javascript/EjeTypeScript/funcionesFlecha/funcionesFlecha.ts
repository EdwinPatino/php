let suma = function(a:number, b:number){
    return a+b;
}

console.log(suma(5,3));

//cuando el cuerpo tiene una sola linea se puede de la siguiente manera
//let sumaFlecha = (a:number, b:number)=> a + b;
let sumaFlecha = (a:number, b:number)=>{
    return a + b;
}

console.log(sumaFlecha(3,2));

let obtenerNombre = function(){
    return 'Edwin Patiño';
}

let obtenerNombreFlecha =()=>{
    return 'Edwin Patiño 2'
}

console.log(obtenerNombreFlecha());