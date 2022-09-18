let persona1 = {
    nombre: 'Edwin',
    apellido: 'Patiño',
    nombreCompleto: function(){
        return this.nombre + ' ' + this.apellido;
    }
}

let persona2 = {
    nombre: 'Alexander',
    apellido: 'Garay'
}

//uso de call 
//el metodo persona1.nombreCompletovcon los datos de persona2
console.log(persona1.nombreCompleto());

console.log(persona1.nombreCompleto.call(persona2));