let persona = {
    nombre: 'Edwin',
    apellido: 'Patiño',
    email: 'epatio654@hotmail.com',
    edad: 28,
    nombreCompleto: function(){
        return this.nombre + ' ' + this.apellido;
    }
}

//se crea nueva propiedad
persona.tel = '1234567';
//se modifica una propiedad
persona.tel = '7654321';

console.log(persona);

// eliminar propiedad
delete persona.tel;

console.log(persona);