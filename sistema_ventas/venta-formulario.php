
<?php

include_once "config.php";
include_once "entidades/venta.php";
include_once "entidades/cliente.php";
include_once "entidades/producto.php";

$venta = new Venta();
$venta->cargarFormulario($_REQUEST);

$pg = "Formulario clientes";

if($_POST){
    if(isset($_POST["btnGuardar"])){
        if(isset($_GET["id"]) && $_GET["id"] > 0){
              //Actualizo un cliente existente
              $venta->actualizar();
        } else {
            //Es nuevo
            $venta->insertar();
        }
        $msg["texto"] = "Guardado correctamente";
        $msg["codigo"] = "alert-success";

    } else if(isset($_POST["btnBorrar"])){
        $venta->eliminar();
        header("Location: venta-listado.php");
    }
} 

if(isset($_GET["do"]) && $_GET["do"] == "buscarProducto"){
    $aResultado = array();
    $idProducto = $_GET["id"];
    $producto = new Producto();
    $producto->idproducto = $idProducto;
    $producto->obtenerPorId();
    $aResultado["precio"] = $producto->precio;
    $aResultado["cantidad"] = $producto->cantidad;
    echo json_encode($aResultado);
    exit;
}

if(isset($_GET["id"]) && $_GET["id"] > 0){
    $venta->obtenerPorId();
}


$cliente = new Cliente();
$aClientes = $cliente->obtenerTodos();

$producto = new Producto();
$aProductos = $producto->obtenerTodos();

include_once("header.php"); 
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Venta</h1>
          <?php if(isset($msg)): ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert <?php echo $msg["codigo"]; ?>" role="alert">
                        <?php echo $msg["texto"]; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 mb-3">
                    <a href="venta-listado.php" class="btn btn-primary mr-2">Listado</a>
                    <a href="venta-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                    <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                    <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="txtFecha" class="d-block">Fecha y hora:</label>
                    <select class="form-control d-inline"  name="txtDia" id="txtDia" style="width: 80px">
                        <option selected="" disabled="">DD</option>
                        <?php for($i=1; $i <= 31; $i++): ?>
                            <?php if($venta->fecha != "" && $i == date_format(date_create($venta->fecha), "d")): ?>
                            <option selected><?php echo $i; ?></option>
                            <?php else: ?>
                            <option><?php echo $i; ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>
                    <select class="form-control d-inline"  name="txtMes" id="txtMes" style="width: 80px">
                        <option selected="" disabled="">MM</option>
                        <?php for($i=1; $i <= 12; $i++): ?>
                            <?php if($venta->fecha != "" && $i == date_format(date_create($venta->fecha), "m")): ?>
                            <option selected><?php echo $i; ?></option>
                            <?php else: ?>
                            <option><?php echo $i; ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>
                    <select class="form-control d-inline"  name="txtAnio" id="txtAnio" style="width: 100px">
                        <option selected="" disabled="">YYYY</option>
                        <?php for($i=1900; $i <= date("Y"); $i++): ?>
                         <?php if($venta->fecha != "" && $i == date_format(date_create($venta->fecha), "Y")): ?>
                            <option selected><?php echo $i; ?></option>
                            <?php else: ?>
                            <option><?php echo $i; ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>
                    <?php if($venta->fecha == ""): ?>
                    <input type="time" required="" class="form-control d-inline" style="width: 120px" name="txtHora" id="txtHora" value="00:00">
                    <?php else: ?>
                    <input type="time" required="" class="form-control d-inline" style="width: 120px" name="txtHora" id="txtHora" value="<?php echo date_format(date_create($venta->fecha), "H:m"); ?>">
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="lstCliente" class="d-block">Cliente:</label>
                    <select class="form-control selectpicker"  name="lstCliente" id="lstCliente" required>
                        <option value="" disabled selected>Seleccionar</option>
                        <?php foreach($aClientes as $client): ?>
                            <?php if($client->idcliente == $venta->fk_idcliente): ?>
                                <option selected value="<?php echo $client->idcliente; ?>"><?php echo $client->nombre; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $client->idcliente; ?>"><?php echo $client->nombre; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-6 form-group">
                    <label for="lstProducto" class="d-block">Producto:</label>
                    <select class="form-control selectpicker"  name="lstProducto" id="lstProducto" onchange="fBuscarPrecio();">
                        <option value="" disabled selected>Seleccionar</option>
                        <?php foreach($aProductos as $produc): ?>
                            <?php if($produc->idproducto == $venta->fk_idproducto): ?>
                                <option selected value="<?php echo $produc->idproducto; ?>"><?php echo $produc->nombre; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $produc->idproducto; ?>"><?php echo $produc->nombre; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-6 form-group">
                    <label for="txtPrecio">Precio Unitario:</label>
                    <input type="txt" class="form-control" name="txtPrecio" id="txtPrecio" required value="$ <?php echo $venta->preciounitario; ?>" disabled>
                    <input type="hidden" class="form-control" name="txtPrecioUni" id="txtPrecioUni" value="<?php echo $venta->preciounitario; ?>">
                </div>
                <div class="col-6 form-group">
                    <label for="txtCantidad">Cantidad:</label>
                    <input type="txt" class="form-control" name="txtCantidad" id="txtCantidad" required value="<?php echo $venta->cantidad; ?>" onchange="fCalcularTotal();">
                    <span id="msgStock" class="text-danger" style="display:none;">No hay stock suficiente</span>
                </div>
                <div class="col-6 form-group">
                    <label for="txtTotal">Total:</label>
                    <input type="txt" class="form-control" name="txtTotal" id="txtTotal" required value="<?php echo $venta->total; ?>">
                </div>
                
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


<script>
    function fBuscarPrecio(){
    let idProducto = $("#lstProducto option:selected").val();
      $.ajax({
            type: "GET",
            url: "venta-formulario.php?do=buscarProducto",
            data: { id:idProducto },
            async: true,
            dataType: "json",
            success: function (respuesta) {
                strResultado = Intl.NumberFormat("es-AR", {style: 'currency', currency: 'ARS'}).format(respuesta.precio);
                $("#txtPrecio").val(strResultado);
                $("#txtPrecioUni").val(respuesta.precio);
            }
        });

}

function fCalcularTotal(){
    var idProducto = $("#lstProducto option:selected").val();
    var precio = parseFloat($('#txtPrecioUni').val());
    var cantidad = parseInt($('#txtCantidad').val());

     $.ajax({
        type: "GET",
        url: "venta-formulario.php?do=buscarProducto",
        data: { id:idProducto },
        async: true,
        dataType: "json",
        success: function (respuesta) {
            let resultado = 0;
            if(cantidad <= parseInt(respuesta.cantidad)){
                resultado = precio * cantidad;
                 $("#msgStock").hide();
            } else {
                $("#msgStock").show();
            }
            strResultado = Intl.NumberFormat("es-AR", {style: 'currency', currency: 'ARS'}).format(resultado);
            $("#txtTotal").val(strResultado);
        }
    });   
}
</script>

<?php include_once("footer.php"); ?>