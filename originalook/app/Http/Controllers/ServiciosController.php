<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;
use App\Servicios;


class ServiciosController extends Controller
{
    public static function ConsultarCategoria(Request $request) {

        if(!$request->session()->get('idUsuario')) {return redirect('./');}

        $mensaje = $request->session()->get('mensaje');
        $request->session()->put('mensaje','');		// Vacio

        $categoria = Categoria::where('categoria_activa','=','Si')->get()->toArray();

        $listaServicio = Servicios::select( 'servicios.*',
                                            'categorias.nombre as nombre_categoria')
                            ->join('categorias','servicios.id_categorias','=','categorias.id')
                            ->get()
                            ->toArray();

        return view('administrador.servicios',
            [
                'nombreUsuario' => $request->session()->get('nombre'),
                'categorias' => $categoria,
                'mensaje' => $mensaje,
                'listaServicios' => $listaServicio,
                'rutaImagen' => $request->session()->get('rutaImagen'),
                'idRol' => $request->session()->get('idRol'),
            ]
        );
    }

    public static function ServiciosCategoria(Request $request) {

        $clase = new Servicios;
        $clase->id_categorias = $request->get('categoria');
        $clase->nombre = $request->get('servicio');
        $clase->valor = $request->get('valor');
        $clase->servicio_activo = 'Activo';
        $clase->descripcion = $request->get('descripcion');
        $clase->fecha_creacion = date('Y-m-d');

        $clase->save();

        $request->session()->put('mensaje', 'Si');

        return redirect('administrador/servicios');
    }

    public static function GuardarActualizacionServicios(Request $request) {

        $clase = Servicios::Find($request->get('id'));

        $clase->id_categorias = $request->get('categoria');
        $clase->nombre = $request->get('servicio');
        $clase->valor = $request->get('valor');
        $clase->servicio_activo = 'Activo';
        $clase->descripcion = $request->get('descripcion');
        $clase->fecha_creacion = date('Y-m-d');

        $clase->save();

        $request->session()->put('mensaje', 'Si');

        return redirect('administrador/servicios');
    }

    public static function BorrarServicios(Request $request) {

        Servicios::where('id', '=', $request->get('id'))->delete();

        return redirect('administrador/servicios');
    }

    public static function ActualizarServicios(Request $request) {

        $mensaje = $request->session()->get('mensaje');
        $request->session()->put('mensaje','');		// Vacio

        $categoria = Categoria::where('categoria_activa','=','Si')->get()->toArray();

        $listaServicio = Servicios::where('id','=',$request->get('id'))
            ->get()
            ->toArray()[0];


        return view('administrador.actualizarServicios',
            [
                'nombreUsuario' => $request->session()->get('nombre'),
                'categorias' => $categoria,
                'servicio' => $listaServicio,
                'mensaje' => $mensaje,
                'rutaImagen' => $request->session()->get('rutaImagen'),
            ]
        );
    }
}
