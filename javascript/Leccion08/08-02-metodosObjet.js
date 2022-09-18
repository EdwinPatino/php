let persona = {
    nombre: 'Edwin',
    apellido: 'Patiño',
    email: 'epatio654@hotmail.com',
    edad: 28,
    nombreCompleto: function(){
        return this.nombre + ' ' + this.apellido;
    }
 }

 console.log(persona.nombreCompleto());
 
