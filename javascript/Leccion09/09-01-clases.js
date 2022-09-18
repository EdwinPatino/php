//no es posible crear objetos antes de declarar la clase

//Clase
class Persona {
    //Constructor
    constructor(nombre, apellido){
        this._nombre = nombre;
        this._apellido = apellido;
    }
    // get y set
    get nombre(){
        return this._nombre;
    }
    set nombre(nombre){
        this._nombre = nombre;
    }
}

let persona1 = new Persona('Edw', 'Patino');
persona1.nombre = 'Edwin Alexander'; //set nombre
console.log(persona1.nombre); //get nombre
