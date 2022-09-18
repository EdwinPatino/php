let persona = {
    nombre: 'Edwin',
    apellido: 'Patiño',
    email: 'epatio654@hotmail.com',
    edad: 28,
    get nombreCompleto(){
        return this.nombre + ' ' + this.apellido;
    }
}

console.log(persona.nombreCompleto);