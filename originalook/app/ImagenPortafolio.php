<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class ImagenPortafolio extends Model
{
    public $timestamps = false;
    protected $table = "imagen_portafolio";


    public static function consultarCantidadPorPortafolio($idPortafolio) {
        try {
            return ImagenPortafolio::where('id_portafolio','=',$idPortafolio)
                ->get();
        } catch (Exception $e) {
            return array();
        }
    }

    public static function eliminar($request)
    {
        try {
            if (ImagenPortafolio::destroy($request->get('id'))) {
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje'   => 'Se eliminó correctamente',
                ));
            }
            else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje'   => 'Se encontraron problemas al eliminar',
                ));
            }
        }
        catch (Exception $e) {
            return response()->json(array(
                'resultado' => -2,
                'mensaje'   => 'Grave error: ' . $e,
            ));
        }
    }
}