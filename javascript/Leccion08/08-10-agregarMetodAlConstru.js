//constructor
function Persona(nombre, apellido, email){
    this.nombre = nombre;
    this.apellido = apellido;
    this.email = email;
    this.nombreCompleto = function(){
        return this.nombre + ' ' + this.apellido;
    }
}

let padre = new Persona('Edwin', 'Patiño', 'correo@gmail.com');
console.log(padre);
console.log(padre.nombreCompleto());

let madre = new Persona('Sofia', 'Bautista', 'sogia@correo.com');
console.log(madre);
console.log(madre.nombreCompleto());

padre.nombre = 'Alexander';
console.log(padre);
console.log(madre);