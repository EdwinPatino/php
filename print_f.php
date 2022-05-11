<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function print_f($variable){
    if(is_array($variable)){
        $contenido = "";
        foreach($variable as $item){
            $contenido .= $item;          
            file_put_contents("datos.txt", $contenido);
        }
    }else{
        file_put_contents("datos.txt", $variable);
    }
}

$aNotas = array(8,5,7,9,10);
$msg = "Este es un mensaje";
print_f($aNotas);


function print_f2($variable){
    if(is_array($variable)){
        $archivo = fopen("datos2.txt", "w");
        foreach($variable as $item){
            fwrite($archivo, $item);
        }
        fclose($archivo);
    }else{
        file_put_contents("datos.txt", $variable);
    }
}

$aNotas = array(8,5,7,9,10);
$msg = "Este es un mensaje";
print_f2($aNotas);

function print_f3($variable){
    if(is_array($variable)){
        $contenido = "";
        foreach($variable as $item){
            $contenido .= $item . "\n";   

        }
        file_put_contents("datos3.txt", $contenido);
    }else{
        file_put_contents("datos.txt", $variable);
    }
}

$aNotas = array(8,5,7,9,10);
$msg = "Este es un mensaje";
print_f3($aNotas);
?>