<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona{
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

    public function __construct($dni,$nombre,$correo,$celular){
        $this->dni = $dni;
        $this->combre = $nombre;
        $this->correo = $correo;
        $this->celular = $celular;
    }

    public function imprimir(){
        echo "DNI:" . $this->dni . "<br>";
        echo "Nombre:" . $this->nombre . "<br>";
        echo "Correo:" . $this->correo . "<br>";
        echo "Celular:" . $this->celular . "<br>";
    }
}

class Alumno extends Persona{
    private $fechaNac;
    private $peso;
    private $altura;
    private $aptoFisico;
    private $presentismo;
    
    public function __construct($dni,$nombre,$correo,$celular,$fechaNac){
        
        $this->peso = 0.0;
        $this->altura = 0.0;
        $this->aptoFisico = false;
        $this->presentismo = 0.0;
        
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function setFichaMedica($peso,$altura,$aptoFisico){
        $this->peso = $peso;
        $this->altura = $altura;
        $this->aptoFisico = $aptoFisico;
    }
}

class Entrenador extends Persona{
    private $aClases;

    public function __construct($dni,$nombre,$correo,$celular){
        $this->aClases = array();
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function asignarClase($clase){
        $this->aClases[] = $clase;
    }
}

class Clase{
    private $nombre;
    private $entrenador;
    private $aAlumnos;

    public function __construct(){
        $this->aAlumnos = array();
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function asignarEntrenador($entrenador){
        $this->entrenador = $entrenador;
    }

    public function inscribirAlumno($alumno){
        $this->aAlumnos[] = $alumno;
    }

    public function imprimirListado(){
        echo "Nombre de la clase: ". $this->nombre . "<br>";
        echo "Entrenador: ". $this->entrenador->nombre . "<br>";
        echo "Alumnos: <br>";
        foreach($this->aAlumnos as $alumno){
            echo "DNI: ". $alumno->dni . "<br>";
            echo "Nombre: ". $alumno->nombre . "<br>";
            echo "Correo: ". $alumno->correo . "<br>";
            echo "Celular: ". $alumno->celular . "<br><br>";
        }
    }
}


//Desarrollo del programa
$entrenador1 = new Entrenador("34987789","Miguel Ocampo","miguel@gmail.com","11678634");
$entrenador2 = new Entrenador("28987589","Andrea Zarate","andrea@gmail.com","11768654");

$alumno1 = new Alumno("40787657","Dante Montera","dante@gmail.com","1145632457","1997-08-28");
$alumno1->setFichaMedica("90","178",true);
$alumno1->presentismo = 78;

$alumno2 = new Alumno("46766547","Darío Turchi","dario@gmail.com","1123456767","1986-11-21");
$alumno2->setFichaMedica("73","168",false);
$alumno2->presentismo = 68;

$alumno3 = new Alumno("39765454","Facundo Fagnano","facundo@gmail.com","1145631234","1993-02-06");
$alumno3->setFichaMedica("90","187",true);
$alumno3->presentismo = 88;

$alumno4 = new Alumno("41687536","Gaston Aguilar","gaston@gmail.com","1145631234","1999-11-02");
$alumno4->setFichaMedica("70","169",false);
$alumno4->presentismo = 98;

$clase1 = new Clase();
$clase1->nombre = "Funcional";
$clase1->asignarEntrenador($entrenador1);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->inscribirAlumno($alumno4);
$clase1->imprimirListado();

$clase2 = new Clase();
$clase2->nombre = "Zumba";
$clase2->asignarEntrenador($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->inscribirAlumno($alumno3);
$clase2->imprimirListado();