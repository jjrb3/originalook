<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SolicitudesProfesionales;

class SolicitudesController extends Controller
{
    public function Consultar(Request $request) {

        if(!$request->session()->get('idUsuario')) {return redirect('./');}

        if ($request->session()->get('idRol') == 1) {
            $solicitudes = SolicitudesProfesionales::consultarSolicitudesPorProfesional($request->session()->get('idPerfil'));
        }
        else {
            $solicitudes = SolicitudesProfesionales::consultarTodasLasSolicitudes();
        }


        return view('administrador.solicitudes',[
            'nombreUsuario' => $request->session()->get('nombre'),
            'rutaImagen' => $request->session()->get('rutaImagen'),
            'idRol' => $request->session()->get('idRol'),
            'menu' => \App\Http\Controllers\MenuController::ObtenerMenu($request),
            'solicitudes' => $solicitudes,
        ]);
    }
}
