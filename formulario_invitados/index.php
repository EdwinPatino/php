<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Si existe el archivo invitados lo abrimos y cargamos en una variable del tipo array
//los DNIs permitidos
if(file_exists("tareas.txt")){
    $strJson = file_get_contents("invitados.txt");
    $aTareas = json_decode($strJson, true);
}else{
    //Sino el array queda como un array vacio
    $aInvitados = array();
}


if($_POST){
    if(isset($_POST["btnProcesar"])){
        //si el DNI ingresado se encuentra en la lista mostrará un mensaje de bienvenido

        //si no un mensaje de no se encuentra en la lista de invitados
    }
    if(isset($_POST["btnVip"])){
        //Si el codigo es verde entonces mostrará Su código de acceso es ....
        //Sino Ud. no tiene pase VIP
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario invitados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3">
                <h1 class="pb-3">Lista de invitados</h1>
                <p>Complete el siguiente formulario</p>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <form action="" method="post">
                    <div class="pt-3">
                        <label for="txtDni">Ingrese el DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control mt-3">
                        <button type="submit" id="btnProcesar" name="btnProcesar" class="btn btn-primary text-center">Verificar invitado</button>
                    </div>
                    <div class="pt-3">
                        <label for="txtCodigo">Ingresa el código secreto para el pase VIP:</label>
                        <input type="text" name="txtCodigo" id="txtCodigo" class="form-control mt-3">
                        <button type="submit" id="btnVip" name="btnVip" class="btn btn-primary text-center">Verificar código</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>