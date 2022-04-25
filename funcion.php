<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//-------------------------
function sumar($num1, $num2){
    return $num1 + $num2;
}

echo  "La suma es: " . sumar(5000, 800);

//--------------------------
function concatenar($cadena1, $cadena2){
    return "$cadena1 $cadena2";
}
echo concatenar("El libro", "de la selva");

//--------------------------
function saludar($nombre, $apellido = ""){
    return "Hola $nombre $apellido";
}

$saludo = saludar("Ana","Pérez");
echo $saludo;
echo(saludar("Ricardo"));