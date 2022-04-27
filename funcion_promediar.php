<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function promediar($aNumeros){
    $promedio = 0;
    foreach($aNumeros as $numero){
        $promedio = $promedio + $numero;
    }
    return $promedio/ count($aNumeros);
}

$aNotas = array(8, 4, 5, 3, 9, 1, 8);
echo "El promedio es: " . promediar($aNotas) . "<br>";