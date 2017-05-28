<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profesionales;

use App\ImagenPortafolio;

class PortafolioController extends Controller
{
    public static function ConsultarPortafolio(Request $request) {

        if(!$request->session()->get('idUsuario')) {return redirect('./');}

        $profesionales = Profesionales::consultarPorUsuario($request->session()->get('idUsuario'))->toArray();

        	$consulta = ImagenPortafolio::orderBy('id_portafolio')
					->get()
					->toArray();


        return view('administrador.portafolio',[
            'nombreUsuario' => $request->session()->get('nombre'),
            'rutaImagen' => $request->session()->get('rutaImagen'),
            'idRol' => $request->session()->get('idRol'),
            'profesonales' => $profesionales,
            'imagen' => $consulta,
            'menu' => \App\Http\Controllers\MenuController::ObtenerMenu($request),
            ]);
    }

    public function guardarImagen(Request $request){

        $cantidad = ImagenPortafolio::consultarCantidadPorPortafolio($request->get('id'))->toArray();

        if (count($cantidad) > 3) {
            return redirect('administrador/portafolio?error=3');
        }
        else {

            $id_portafolio = $request->get('id');
            $nombre_ = $request->get('nombre');
            $comentario = $request->get('comentario');

            if ($request->file('imagen')) {

                $directorio = __DIR__ . '/../../../../recursos/imagen_portafolio';
                $archivo = $request->file('imagen');

                $nombre = explode('.', $archivo->getClientOriginalName());
                $ext = $nombre[1];
                $nombreArchivo = $request->session()->get('idUsuario') . '_' . date("Ymd_his") . ".$ext";

                if ($archivo->move($directorio, $nombreArchivo)) {

                    $tabla = new ImagenPortafolio();
                    $tabla->id_portafolio = $id_portafolio;
                    $tabla->url = $nombreArchivo;
                    $tabla->nombre = $nombre_;
                    $tabla->comentario = $comentario;


                    $tabla->save();
                    return redirect('administrador/portafolio');
                }
            }
        }

    	die;
    }


    public function borrar(Request $request) {

        $imagenPortafolio = ImagenPortafolio::Find($request->get('id'))->toArray();

        if ($imagenPortafolio) {

            @unlink(__DIR__ . '/../../../../recursos/imagen_portafolio/' . $imagenPortafolio['url']);

            return imagenPortafolio::eliminar($request);

        }
        else {
            return response()->json(array(
                'resultado' => 0,
                'mensaje'   => 'Se encontraron problemas al eliminar',
            ));
        }

    }

    
}
