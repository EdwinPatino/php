//constructor
function Persona(nombre, apellido, email){
    this.nombre = nombre;
    this.apellido = apellido;
    this.email = email;
}

let padre = new Persona('Edwin', 'Patiño', 'correo@gmail.com');
console.log(padre);

let madre = new Persona('Sofia', 'Bautista', 'sogia@correo.com');
console.log(madre);

padre.nombre = 'Alexander';
console.log(padre);
console.log(madre);