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
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->celular = $celular;
    }
}

class Cliente extends Persona{
    private $aTarjetas;
    private $bActivo;
    private $fechaAlta;
    private $fechaBaja;

    public function __construct(){
        $this->aTarjetas = array();
        $this->bActivo = true;
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function agregarTarjeta($tarjeta){
        $this->aTarjetas = $tarjeta;
    }

    public function imprimirListado(){

    }
}

class Tarjeta{
    private $nombreTitular;
    private $numero;
    private $fehaDesde;
    private $fechaVto;
    private $tipo;
    private $cvv;
    

}
