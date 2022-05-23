<?php 
function guardarArchivo(){
    if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK){ //se adjunto el archivo correctamente, archivo es como se haya nombrado en el formulario
        $nombreAleatorio = date("Ymdhmsi").rand(1000,2000);//se asigna un nombre al archivo, como queremos llamarlo, se coloca año, mes, dia, hora, minuto, segundo, milisegundo y concatena un numero aleatorio entre 1000 y 2000
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];//definimos otra variable archivo temporal, como esta almacenado
        $extension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);// nos trae la extension del archivo que se adjunto
        if($extension == "doc" || $extension == "docx" || $extension == "pdf"){//se verifica si es la extension de el archivo
            move_uploaded_file($archivo_tmp, "files/$nombreAleatorio.$extension");//se busca el archivo temporal y lo almacena en el directorio que nosotros digamos
        }
    }
}
?>