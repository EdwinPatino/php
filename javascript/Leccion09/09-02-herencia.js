//por defecto todas las clases heredan de la clase Object 
//se puede colocar extends Object pero no es necesario
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
    get apellido(){
        return this._apellido;
    }
    set apellido(apellido){
        this._apellido = apellido;
    }
    nombreCompleto(){
        return this._nombre + ' ' + this._apellido;
    }
    //metodo heredado de Object.prototype
    //sobreescribiendo el metodo de la clase padre (Oblect)
    toString(){
        //se aplica polimorfismo (multiples formas en tiempo de ejecucion)
        //el metodo que se ejecuta depende si es una referencia de la clase padre o la clase hija
        return this.nombreCompleto();
    }
}
//Herencia
class Empleado extends Persona{
    //constructor
    constructor(nombre, apellido, departamento){
        super(nombre, apellido);//llamar constructor de la clase padre
        this._deparatmento = departamento;
    }
    //get y set
    get departamento(){
        return this._deparatmento;
    }
    set departamento(departamento){
        this._deparatmento = departamento;
    }
    //Sobreescritura: modificar el comportamiento de un metoto definido en la clase padre
    nombreCompleto(){
        return super.nombreCompleto() + ', ' + this._deparatmento;  
    }
}

//Se instancia un objeto de la clase padre
let persona1 = new Persona('Edw', 'Patino');
console.log(persona1.nombre);
//se llama el metodo de la clase padre 
console.log(persona1.toString());

//Herencia
//Se instancia un objeto de la clase hija
let empleado1 = new Empleado('Paola', 'Bautista', 'Finanzas');
console.log(empleado1);
//Herencia get set 
console.log(empleado1.nombre);
//Heredo el metodo nombreCompleto
console.log(empleado1.nombreCompleto());
//se llama el metodo nombreCompleto definido en la clase hija a esto tambien se le conoce como polimorfismo
console.log(empleado1.toString());

