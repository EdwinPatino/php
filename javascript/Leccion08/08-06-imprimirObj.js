let persona = {
    nombre: 'Edwin',
    apellido: 'Patiño',
    email: 'epatio654@hotmail.com',
    edad: 28,
    nombreCompleto: function(){
        return this.nombre + ' ' + this.apellido;
    }
}
//concatenar cada valor de la propiedad
console.log(persona.nombre + ' ' + persona.apellido + ' ' + persona.email);

//for in
for(nombrePropiedad in persona){
    console.log(persona[nombrePropiedad]);
}

//oblect.values();
let personaArray = Object.values(persona);
console.log(personaArray);

//cadena
let personaString = JSON.stringify(persona);
console.log(personaString);