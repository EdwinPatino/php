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
console.log(persona1.nombreCompleto('Ingeniero', '7654321'));

console.log(persona1.nombreCompleto.call(persona2, 'Ing', '1234567'));