<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$miAuto = array(
    "Patente" => "AA123hb",
    "Marca" => "Ford"
);
foreach ($miAuto as $valor){
    echo ($valor . "<br>");
}

foreach ($miAuto as $clave => $valor){
    echo "La $clave es: $valor <br>";
}


$aClientes = array(
    array("dni" => "33300012", "nombre" => "Ana Valle"),
    array("dni" => "33300013", "nombre" => "Bernabe"),
);


foreach ($aClientes as $pos => $cliente){
    echo "En la posición $pos se encuentra " . $cliente["nombre"] . "<br>";
}