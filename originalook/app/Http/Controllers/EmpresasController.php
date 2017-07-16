<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Roles;
use App\Usuarios;

class EmpresasController extends Controller
{
    public static function Consultar(Request $request) {

        if(!$request->session()->get('idUsuario')) {return redirect('./');}

        return view('administrador.empresas',[
            'nombreUsuario' => $request->session()->get('nombre'),
            'rutaImagen' => $request->session()->get('rutaImagen'),
            'idRol' => $request->session()->get('idRol'),
            'roles' => Roles::all(),
            'empresas' => Usuarios::whereIn('id_roles',[4])->orderBy('id','DESC')->get(),
            'menu' => \App\Http\Controllers\MenuController::ObtenerMenu($request),
        ]);
    }

    public static function Guardar(Request $request) {

        $clase = new Usuarios;
        $clase->id_roles = 4;
        $clase->id_documentos = 6;
        $clase->primer_nombre = $request->get('nombre');
        $clase->identificacion = $request->get('documento');
        $clase->estado = $request->get('estado');
        $clase->direccion = $request->get('direccion');
        $clase->pais = 'Colombia';
        $clase->telefono = $request->get('telefono');
        $clase->correo = $request->get('correo');
        $clase->ciudad = $request->get('ciudad');
        $clase->usuario = $request->get('usuario');
        $clase->clave = $request->get('clave');
        $clase->fecha_creacion = date('Y-m-d');
        $clase->fecha_modificacion = date('Y-m-d');

        return $clase->save() ? redirect('administrador/empresas?result=1') : redirect('administrador/empresas?mensaje=-1');
    }

    public function Eliminar(Request $request) {
        return Usuarios::eliminar($request->get('id'));
    }
}
