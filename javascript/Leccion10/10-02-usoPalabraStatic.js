//por defecto todas las clases heredan de la clase Object 
//se puede colocar extends Object pero no es necesario
//Clase
class Persona {
    //atributos estaticos
    static contadorPersonas = 0;//atributo de nuestra clase

    static get MAX_OBJ(){
        return 5;
    }
    //Constructor
    constructor(nombre, apellido){
        this._nombre = nombre;
        this._apellido = apellido;
        if(Persona.contadorPersonas < Persona.MAX_OBJ){
            this.idPersona = ++Persona.contadorPersonas;
        }else{
            console.log('se han superado el maximo de objetos permitidos');
        }
        
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
        return this.idPersona + ' ' + this._nombre + ' ' + this._apellido;
    }
    //metodo heredado de Object.prototype
    //sobreescribiendo el metodo de la clase padre (Oblect)
    toString(){
        //se aplica polimorfismo (multiples formas en tiempo de ejecucion)
        //el metodo que se ejecuta depende si es una referencia de la clase padre o la clase hija
        return this.nombreCompleto();
    }
    static saludar(){
        console.log('saludos desde metodo static')
    }
    static saludar2(persona){
        console.log(persona.nombre + ' ' + persona.apellido);
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

let persona1 = new Persona('Edw', 'Patino');
console.log (persona1.toString());

let empleado1 = new Empleado('Paola', 'Bautista', 'Finanzas');
console.log (empleado1.toString());

console.log (Persona.contadorPersonas);

let persona2 = new Persona('Alexander', 'Garay');
console.log (persona2.toString());

console.log (Persona.contadorPersonas);

console.log(Persona.MAX_OBJ);
Persona.MAX_OBJ = 10;

let persona3 = new Persona('Alex', 'Patiño');
let persona4 = new Persona('Edwin', 'Garay');
let persona5 = new Persona('Pao', 'Baut');