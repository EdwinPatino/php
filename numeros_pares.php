<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "numeros del 1-100<br>";
for($i=1; $i<101; $i++ ){
    echo $i . "<br>";
}

echo "numeros pares 0-100<br>";
for($i=2; $i<100; $i+=2){
    echo $i . "<br>";
}

echo "numeros pares se interrumpe en 60<br>";
for($i=0; $i<100; $i+=2){
    echo $i . "<br>";
    if($i==60){
        break;
    }
}
