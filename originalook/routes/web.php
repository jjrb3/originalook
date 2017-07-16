<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Documentos;
use App\Usuarios;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('wellive');
});

Route::get('/inicio', function () {return view('inicio');});
Route::get('/portafolio', function () {return view('portafolio');});
Route::get('/servicios', function () {return view('servicios');});
Route::get('/contacto', function () {return view('contacto');});
Route::get('/wellive', function () {return view('wellive');});


Route::get('administrador/cerrarSesion', function (Request $request) {

    $request->session()->flush();

	return redirect('./');
});

Route::get('/registroCliente', function () {
	
	$consulta = Documentos::orderBy('nombre','asc')
							->get()
							->toArray();

	return view('registroCliente',['tipoIdentificacion' => $consulta]);
});



Route::post('/registrarCliente', function (Request $request) {
	
	$tabla = new Usuarios();

	$tabla->id_roles = $request->get('rol') == 'Profesional' ? 1 : 4;
	$tabla->id_documentos = 1;#$request->get('tipoIdentificacion');
	$tabla->primer_nombre = $request->get('primerNombre');
	$tabla->segundo_nombre = $request->get('segundoNombre');
	$tabla->primer_apellido = $request->get('primerApellido');
	$tabla->segundo_apellido = $request->get('segundoApellido');
	$tabla->identificacion = $request->get('identificacion');
	$tabla->direccion = $request->get('direccion');
	$tabla->pais = $request->get('pais');
	$tabla->ciudad = $request->get('ciudad');
	$tabla->celular = $request->get('celular');
	$tabla->dispositivo = $request->get('marca');
	$tabla->telefono = $request->get('telefono');
	$tabla->estado = 1;
	$tabla->usuario = $request->get('usuario');
	$tabla->clave = $request->get('clave');
	$tabla->correo = $request->get('email');
	$tabla->correo_alternativo = $request->get('emailAlternativo');
	$tabla->fecha_nacimiento = $request->get('nacimiento');
	$tabla->fecha_creacion = date('Y-m-d');
	$tabla->fecha_modificacion = date('Y-m-d');
	
	$tabla->save();

	$request->session()->put('idUsuario', $tabla->id);
	$request->session()->put('idRol', $tabla->id_roles);
	$request->session()->put('nombre', $request->get('primerNombre').' '.$request->get('primerApellido') .' '.$request->get('segundoApellido'));

	return redirect('administrador/inicio');
});

Route::post('/verificarLogin', function (Request $request) {
	
	$consulta = Usuarios::where('usuario','=',$request->get('usuario'))
					->where('clave','=',$request->get('clave'))
					->where('estado','=',1)
					->get()
					->toArray();
	
	if (count($consulta)) {

		$request->session()->put('idUsuario', $consulta[0]['id']);
        $request->session()->put('idRol', $consulta[0]['id_roles']);
		$request->session()->put('rutaImagen', $consulta[0]['ruta_imagen']);
		$request->session()->put('nombre', $consulta[0]['primer_nombre'].' '.$consulta[0]['primer_apellido'] .' '.$consulta[0]['segundo_apellido']);
		
		return redirect('administrador/inicio');		
	}
	else {

		return redirect('./inicio');
	}
});


Route::get('administrador/inicio', function (Request $request) {
	if(!$request->session()->get('idUsuario')) {return redirect('./');}

    return view('administrador.inicio',[
    	'nombreUsuario' => $request->session()->get('nombre'),
    	'rutaImagen' => $request->session()->get('rutaImagen'),
        'idRol' => $request->session()->get('idRol'),
        'menu' => \App\Http\Controllers\MenuController::ObtenerMenu($request),
    	]);
});


// Perfil
Route::get('administrador/perfil', function (Request $request) {
	if(!$request->session()->get('idUsuario')) {return redirect('./');}

	$usuario = Usuarios::Find($request->session()->get('idUsuario'))->toArray();

	$mensaje = $request->session()->get('mensaje');

	$request->session()->put('mensaje','');		// Vacio

    return view('administrador.perfil',[
    	'nombreUsuario' => $request->session()->get('nombre'),
    	'datosUsuario' => $usuario,
    	'mensaje' => $mensaje,
    	'rutaImagen' => $request->session()->get('rutaImagen'),
        'idRol' => $request->session()->get('idRol'),
        'menu' => \App\Http\Controllers\MenuController::ObtenerMenu($request),
    	]);
});

Route::post('administrador/registrarCliente/actualizar', function (Request $request) {
	
	$tabla = Usuarios::Find($request->session()->get('idUsuario'));


	if ($request->file('imagen_logo')) {

		$directorio = __DIR__.'/../../recursos/imagen_perfil';
	    $archivo 	= $request->file('imagen_logo');
	    
	    $nombre 		= explode('.',$archivo->getClientOriginalName());
	    $ext 			= $nombre[1];
	    $nombreArchivo 	= $request->session()->get('idUsuario') . '_' . date("Ymd_his") . ".$ext";

	    if ($archivo->move($directorio, $nombreArchivo)) {
		    $tabla->ruta_imagen = $nombreArchivo;
		    $request->session()->put('rutaImagen', $nombreArchivo);
		}
	}

	$tabla->primer_nombre = $request->get('primer_nombre');
	$tabla->segundo_nombre = $request->get('segundo_nombre');
	$tabla->primer_apellido = $request->get('primer_apellido');
	$tabla->segundo_apellido = $request->get('segundo_apellido');
	$tabla->telefono = $request->get('telefono');
	$tabla->correo = $request->get('correo');
	$tabla->descripcion = $request->get('descripcion');

	$tabla->save();

	$request->session()->put('mensaje', 'Si');

	return redirect('administrador/perfil');
});

// Fin de perfil

// Servicios
Route::get('administrador/servicios','ServiciosController@ConsultarCategoria');
Route::post('administrador/servicios/guardar','ServiciosController@ServiciosCategoria');
Route::get('administrador/servicios/borrar','ServiciosController@BorrarServicios');
Route::get('administrador/servicios/actualizar','ServiciosController@ActualizarServicios');
Route::post('administrador/servicios/guardarActualizacion','ServiciosController@GuardarActualizacionServicios');
// Fin de servicios


// Portafolio
Route::get('administrador/portafolio','PortafolioController@ConsultarPortafolio');
Route::post('administrador/portafolio/guardarImagen','PortafolioController@guardarImagen');
Route::post('administrador/portafolio/borrar','PortafolioController@borrar');
// Fin de Portafolio

// Empleados
Route::get('administrador/empleados','EmpleadosController@Consultar');
Route::post('administrador/empleados/guardar','EmpleadosController@Guardar');
Route::post('administrador/empleados/eliminar','EmpleadosController@Eliminar');
// Fin de Empleados

// Usuario
Route::get('administrador/usuario','UsuarioController@Consultar');
Route::get('administrador/editar-usuario','UsuarioController@EditarUsuario');
Route::post('administrador/usuario/actualizar','UsuarioController@Actualizar');
// Fin de Usuario

#Solicitudes
Route::get('administrador/solicitudes','SolicitudesController@Consultar');
//Solicitudes

Route::get('administrador/pagos', function (Request $request) {
	if(!$request->session()->get('idUsuario')) {return redirect('./');}
    return view('administrador.pagos',[
    	'nombreUsuario' => $request->session()->get('nombre'),
    	'rutaImagen' => $request->session()->get('rutaImagen'),
        'idRol' => $request->session()->get('idRol'),
        'menu' => \App\Http\Controllers\MenuController::ObtenerMenu($request),
    	]);
});

Route::get('administrador/documentacion', function (Request $request) {
	if(!$request->session()->get('idUsuario')) {return redirect('./');}
    return view('administrador.documentacion',[
    	'nombreUsuario' => $request->session()->get('nombre'),
    	'rutaImagen' => $request->session()->get('rutaImagen'),
        'idRol' => $request->session()->get('idRol'),
        'menu' => \App\Http\Controllers\MenuController::ObtenerMenu($request),
    	]);
});