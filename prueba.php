<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aUsuarios = array(
    array('nombre' => 'Alex', 'apellido' => 'Escobar', 'telefono' => '3213211212'),
    array('nombre' => 'Juan', 'apellido' => 'Gomez', 'telefono' => '3211231212'),
    array('nombre' => 'Andres', 'apellido' => 'Marin', 'telefono' => '3211112223'),
    array('nombre' => 'Angie', 'apellido' => 'Rivera', 'telefono' => '3211212121')
);

foreach ($aUsuarios as $usuario)
{
    echo $usuario['nombre'] . ' ' . $usuario['apellido'] . ' ' . $usuario['telefono'] . '<br>';
}



