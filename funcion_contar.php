<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana Del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andrés Perez", "bruto" => 100000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 70000);

$aNotas = array(9,8,9.50,4,7,8,10);

function contar($aArray){
    $contador = 0;
    foreach($aArray as $cont){
        $contador += 1;
    }return $contador;
}

echo "Cantidad de productos: " . contar($aNotas);
echo "<br> Cantidad de empleados: " . contar($aEmpleados);