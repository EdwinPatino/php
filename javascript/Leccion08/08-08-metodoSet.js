let persona = {
    nombre: 'Edwin',
    apellido: 'Patiño',
    email: 'epatio654@hotmail.com',
    edad: 28,
    idioma: 'es',
    get lang(){
        // toUpperCase cambia de minuscula a mayuscula
        return this.idioma.toUpperCase();
    },
    set lang(lang){
        this.idioma = lang.toUpperCase();
    },
    get nombreCompleto(){
        return this.nombre + ' ' + this.apellido;
    }
}

console.log(persona.lang);
persona.lang = 'en';
console.log(persona.lang);
console.log(persona.idioma);
