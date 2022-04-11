<?php
    $valor = rand(1,5);
    if ($valor ==1 || $valor ==3 || $valor ==5){
        echo "El numero es impar <br>";
    }
    else {
        echo "El numero es par <br>";
    }
    
    
    if($valor %2 == 0){
        echo "El numero $valor es par";
    }else{
        echo "El numero $valor es impar";
    }
?>