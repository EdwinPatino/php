let persona1 = {
    nombre: 'Edwin',
    apellido: 'Patiño',
    nombreCompleto: function(titulo, tel){
        return titulo + ': ' + this.nombre + ' ' + this.apellido + ' ' + tel;
    }
}

let persona2 = {
    nombre: 'Alexander',
    apellido: 'Garay'
}

//uso de call 
//el metodo persona1.nombreCompletovcon los datos de persona2
console.log(persona1.nombreCompleto('Ingeniero', '1234567'));

//con apply se pasa un arreglo con los valores de los argumentos
let arreglo = ['Ing','7654321']
console.log(persona1.nombreCompleto.apply(persona2, arreglo));