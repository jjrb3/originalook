<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Roles;
use App\Empleados;

class EmpleadosController extends Controller
{
    public static function Consultar(Request $request) {

        if(!$request->session()->get('idUsuario')) {return redirect('./');}

        return view('administrador.empleados',[
            'nombreUsuario' => $request->session()->get('nombre'),
            'rutaImagen' => $request->session()->get('rutaImagen'),
            'idRol' => $request->session()->get('idRol'),
            'roles' => Roles::all(),
            'empleados' => Empleados::orderBy('id','DESC')->get(),
        ]);
    }

    public static function Guardar(Request $request) {

        $clase = new Empleados;
        $clase->id_rol = $request->get('id_rol');
        $clase->documento = $request->get('documento');
        $clase->nombre = $request->get('nombre');
        $clase->apellido = $request->get('apellido');
        $clase->direccion = $request->get('direccion');
        $clase->telefono = $request->get('telefono');
        $clase->fecha_nacimiento = $request->get('fecha_nacimiento');
        $clase->ciudad = $request->get('ciudad');
        $clase->estado = $request->get('estado');
        $clase->disponible_fecha = $request->get('disponible_fecha');
        $clase->disponible_hora = $request->get('disponible_hora');

        return $clase->save() ? redirect('administrador/empleados?result=1') : redirect('administrador/empleados?mensaje=-1');
    }

    public function Eliminar(Request $request) {

        return Empleados::eliminar($request);
    }
}
