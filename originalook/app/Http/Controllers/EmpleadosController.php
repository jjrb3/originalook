<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public static function Consultar(Request $request) {

        if(!$request->session()->get('idUsuario')) {return redirect('./');}

        return view('administrador.empleados',[
            'nombreUsuario' => $request->session()->get('nombre'),
            'rutaImagen' => $request->session()->get('rutaImagen'),
        ]);
    }
}
