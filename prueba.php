<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use Closure next;
use Request;
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

Route::get('cookie', function(){
	$origin_sesion = cookie('usuario', 'rol', 30);
	$response = response("Voy a enviarte una cookie");
	$response->withCookie($nueva_cookie);
	return $response;
});

class LastSession{

    public function handle($request, Closure $next){
        if ("lifetime" == 1440){
            return redirect('/sesiones');
        }
        return $next($request);
    }
    
}
