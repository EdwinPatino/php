//Se sobre escribe el metodo obtenerDetalles
class Empleado{
    constructor(nombre, sueldo){
        this._nombre = nombre;
        this._sueldo = sueldo;
    }
    obtenerDetalles(){
        return `Empleado: nombre: ${this._nombre}, sueldo: ${this._sueldo}`;
    }
}

class Gerente extends Empleado{
    constructor(nombre, sueldo, departamento){
        super(nombre, sueldo);
        this._departamento = departamento;
    }
    obtenerDetalles(){
        return `Gerente: ${super.obtenerDetalles()} dpto: ${this._departamento}`;
    }
} 
//polimorfismo, multiples formas se llama el metodo obtener detalles y este trae el metodo dependiendo del tipo de dato que se le ingrese
function imprimir(tipo){
    console.log(tipo.obtenerDetalles());
    //instanceof es para saber a que clase pertenece el objeto,
    //es verdadero tanto si el objeto pertenece a esa clase o si es una gherencia de esa clase
    //ejemplo Empleado hereda a Gerente entonces es verdadero si se pregunta por Empleado.
    if(tipo instanceof Empleado){
        console.log('Es un objeto de tipo Empleado')
    } 
}

let empleado1 = new Empleado('Alexander', 4000000);
let gerente1 = new Gerente('Edwin', 3400000, 'Sistemas');

//se llama el mismo metod con un tipo diferente
imprimir(empleado1);
imprimir(gerente1);