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
            'profesonales' => $profesionales,
            'imagen' => $consulta,
            ]);
    }

    public function guardarImagen(Request $request){
    	
    	$id_portafolio=$request->get('id');
    	$nombre_=$request->get('nombre');
        $comentario= $request->get('comentario');

	if ($request->file('imagen')) {

			$directorio = __DIR__.'/../../../../recursos/imagen_portafolio';
		    $archivo 	= $request->file('imagen');
		    
		    $nombre 		= explode('.',$archivo->getClientOriginalName());
		    $ext 			= $nombre[1];
		    $nombreArchivo 	= $request->session()->get('idUsuario') . '_' . date("Ymd_his") . ".$ext";

		    if ($archivo->move($directorio, $nombreArchivo)) {

		    	$tabla= new ImagenPortafolio();
		    	$tabla->id_portafolio = $id_portafolio;
		    	$tabla->url = $nombreArchivo;
			    $tabla->nombre = $nombre_;
			    $tabla->comentario = $comentario;
			    


			    $tabla->save();
                return redirect('administrador/portafolio');
			}
		}

    	die;
    }


    
}
