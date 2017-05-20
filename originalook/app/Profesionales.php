<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Profesionales extends Model
{
    public $timestamps = false;
    protected $table = "profesionales";


    public static function consultarPorUsuario($idUsuario) {

    	try {
	        return Profesionales::where('id_usuarios','=',$idUsuario)
	        			->get();
	    } catch (Exception $e) {
            return array();
        } 
    }
}