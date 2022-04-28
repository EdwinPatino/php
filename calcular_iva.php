<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-3">
                <form action="" method="POST">
                    <div class="my-3">
                        <label for="">IVA 
                            <select class="form-control" name="" id="">
                                <option value="10.5">10.5</option>
                                <option value="21">21</option>
                                <option value="27">27</option>
                            </select>
                        </label>
                    </div>
                    <div class="my-3">
                        <label for="">Precio sin IVA:<input class="form-control" type="text" name="txtPrecioSinIva" id="txtPrecioSinIva"></label>
                    </div>
                    <div class="my-3">
                        <label for="">Precio con IVA:<input class="form-control" type="text" name="txtPrcioIva" id="txtPrcioIva"></label>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary" type="submit">CALCULAR</button>
                    </div>
                </form>
            </div>
            <div class="col-4 my-3">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA: </th>
                    </tr>
                    <tr>
                        <th>Precio sin IVA: </th>
                    </tr>
                    <tr>
                        <th>Precio con IVA: </th>
                    </tr>   
                    <tr>
                        <th>IVA cantidad: </th>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    
</body>
</html>