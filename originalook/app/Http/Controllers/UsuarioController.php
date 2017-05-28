<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuarios;

class UsuarioController extends Controller
{
    public function Consultar(Request $request) {

        if(!$request->session()->get('idUsuario')) {return redirect('./');}

        return view('administrador.usuario',[
            'nombreUsuario' => $request->session()->get('nombre'),
            'rutaImagen' => $request->session()->get('rutaImagen'),
            'idRol' => $request->session()->get('idRol'),
            'menu' => \App\Http\Controllers\MenuController::ObtenerMenu($request),
            'usuarios' => Usuarios::orderBy('id','DESC')->get(),
        ]);
    }

    public function EditarUsuario(Request $request) {

        if(!$request->session()->get('idUsuario')) {return redirect('./');}

        return view('administrador.editarUsuario',[
            'nombreUsuario' => $request->session()->get('nombre'),
            'rutaImagen' => $request->session()->get('rutaImagen'),
            'idRol' => $request->session()->get('idRol'),
            'menu' => \App\Http\Controllers\MenuController::ObtenerMenu($request),
            'usuarios' => Usuarios::orderBy('id','DESC')->get(),
        ]);
    }

    public function Guardar(Request $request) {

    }

    public function Eliminar(Request $request) {

        return Empleados::eliminar($request);
    }
}
