//constructor
function Persona(nombre, apellido, email){
    this.nombre = nombre;
    this.apellido = apellido;
    this.email = email;
    this.nombreCompleto = function(){
        return this.nombre + ' ' + this.apellido;
    }
}

Persona.prototype.tel = '1234567';

let padre = new Persona('Edwin', 'Patiño', 'edwin@correo.com');
padre.tel = '11223344';
console.log(padre.tel);

let madre = new Persona('Paola', 'Bautista', 'paola@correo.com');
madre.tel = '44332211';
console.log(madre.tel);