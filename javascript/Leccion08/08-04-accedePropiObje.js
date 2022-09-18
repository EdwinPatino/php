let persona = {
    nombre: 'Edwin',
    apellido: 'Patiño',
    email: 'epatio654@hotmail.com',
    edad: 28,
    nombreCompleto: function(){
        return this.nombre + ' ' + this.apellido;
    }
}

console.log(persona['apellido']);

// for in

for(nombrePropiedad in persona){
    //accede a la propiedad
    console.log(nombrePropiedad);
    //accede al valor de la propiedad
    console.log(persona[nombrePropiedad]);
}