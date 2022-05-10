<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    if($_POST){
        $nombre = $_POST["txtNombre"];
        $apellido = $_POST["txtApellido"];
        $dni = $_POST["txtDni"];
        $telefono = $_POST["txtTelefono"];
        $edad = $_POST["txtEdad"];

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso confirmado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12 my-2">
                <h1>Bienvenid@ <?php echo $nombre . " " . $apellido; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <p>ACCESO CONFIRMADO</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-sm-2">
                <h3>Datos de usuario:</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-sm-2">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Teléfono</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $apellido; ?></td>
                            <td><?php echo $dni; ?></td>
                            <td><?php echo $telefono; ?></td>
                            <td><?php echo $edad; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-sm-2">
                <a href="index.php" class="btn btn-primary float-end">SALIR</a>
            </div>
        </div>
    </div>
    
</body>
</html>