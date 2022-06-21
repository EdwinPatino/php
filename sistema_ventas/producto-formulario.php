
<?php

include_once "config.php";
include_once "entidades/producto.php";
include_once "entidades/tipoproducto.php";

$pg = "Formulario Producto";

$producto = new Producto();
$producto->cargarFormulario($_REQUEST);

if($_POST){
    if(isset($_POST["btnGuardar"])){
        if(isset($_GET["id"]) && $_GET["id"] > 0){
              //Actualizo un cliente existente
            $producto->actualizar();
        } else {
            //Es nuevo
            $producto->insertar();
        }
        $msg["texto"] = "Guardado correctamente";
        $msg["codigo"] = "alert-success";

    } else if(isset($_POST["btnBorrar"])){
        $producto->eliminar();
        header("Location: producto-listado.php");
    }
} 

if(isset($_GET["id"]) && $_GET["id"] > 0){
    $producto->obtenerPorId();
}

$tipoProducto = new TipoProducto();
$aTipoProductos = $tipoProducto->obtenerTodos();

include_once("header.php"); 
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Producto</h1>
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
                    <a href="producto-listado.php" class="btn btn-primary mr-2">Listado</a>
                    <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                    <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                    <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" required="" class="form-control" name="txtNombre" id="txtNombre" required value="<?php echo $producto->nombre; ?>">
                </div>
                <div class="col-6 form-group">
                    <label for="lstProducto" class="d-block">Tipo de producto:</label>
                    <select class="form-control selectpicker"  name="lstProducto" id="lstProducto" required>
                        <option value="" disabled selected>Seleccionar</option>
                        <?php foreach($aTipoProductos as $tipoPro): ?>
                            <?php if($tipoPro->idtipoproducto == $producto->fk_idtipoproducto): ?>
                                <option selected value="<?php echo $tipoPro->idtipoproducto; ?>"><?php echo $tipoPro->nombre; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $tipoPro->idtipoproducto; ?>"><?php echo $tipoPro->nombre; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-6 form-group">
                    <label for="txtCantidad">Cantidad:</label>
                    <input type="number" class="form-control" name="txtCantidad" id="txtCantidad" required value="<?php echo $producto->cantidad; ?>">
                </div>
                <div class="col-6 form-group">
                    <label for="txtPrecio">Precio:</label>
                    <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" required value="<?php echo $producto->precio; ?>">
                </div>
                <div class="col-12 form-group">
                    <label for="txtDescripcion">Descripción:</label>
                    <textarea type="text" name="txtDescripcion" id="txtDescripcion"><?php echo $producto->descripcion; ?></textarea>
                </div>
                <div class="col-6 form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" class="form-control-file" name="imagen" id="imagen">
                    <img src="" class="img-thumbnail">
                </div>
            </div>
            
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<script>
    ClassicEditor
         .create(document.querySelector('#txtDescripcion'))
         .catch(error=> {
            console.error(error);
         });
</script>
<?php include_once("footer.php"); ?>