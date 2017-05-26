<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    public $timestamps = false;
    protected $table = "empleados_empresa";

    public static function eliminar($request)
    {
        try {
            if (Empleados::destroy($request->get('id'))) {
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