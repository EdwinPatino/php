<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function setDni($dni){ $this->dni = $dni; }
    public function getDni(){ return $this->dni; }

    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function getNombre(){ return $this->nombre; }
    
    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }
    
    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }

    public function imprimir(){
        
    }
}

class Alumno extends Persona{
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function __construct($dni= "", $nombre= ""){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }

    public function __destruct(){
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }
    public function imprimir(){
        echo "Alumno: " . $this->nombre . "<br>"; 
        echo "Documento: " . $this->dni . "<br>"; 
        echo "Nota del PHP: " . $this->notaPhp . "<br>"; 
        echo "Nota del Portfolio: " . $this->notaPortfolio . "<br>"; 
        echo "Nota del Proyecto: " . $this->notaProyecto . "<br><br>"; 
    }

    public function calcularPromedio(){

    }
}

class Docente extends Persona{
    private $especialidad;

    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Ecomomía aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos";

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function __destruct(){
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }

    public function imprimir(){
        echo "Nombre del docente: " . $this->nombre . "<br>";
        echo "Especialidad: " . $this->especialidad . "<br><br>";
    }
    public function imprimirEspecialidadesHabilitadas(){
        echo "Especialidades: <br>";
        echo self::ESPECIALIDAD_WP . "<br>";
        echo self::ESPECIALIDAD_ECO. "<br>";
        echo self::ESPECIALIDAD_BBDD. "<br>";
    }
}

//programa
$alumno2 = new Alumno();
$alumno2->setNombre("Edwin Patino");
$alumno2->setDni("1023916716");
$alumno2->setEdad(29);
$alumno2->setNacionalidad("Colombia");
echo $alumno2->getNombre();
$alumno2->notaPhp = 10;
$alumno2->notaPortfolio = 10;
$alumno2->notaProyecto = 10;
$alumno2->imprimir();

$alumno1 = new Alumno("35987123", "Juana Mendoza");
$alumno1->edad = 32;
$alumno1->nacionalidad = "Argentina";
$alumno1->notaPhp = 8;
$alumno1->notaPortfolio = 9;
$alumno1->notaProyecto = 10;
$alumno1->imprimir();

$docente = new Docente();
$docente->nombre = "Sergio Gonzales";
$docente->especialidad = Docente::ESPECIALIDAD_ECO;
$docente->imprimir();
$docente->imprimirEspecialidadesHabilitadas();

?>