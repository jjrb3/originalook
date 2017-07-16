<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudesProfesionales extends Model
{
    public $timestamps = false;
    protected $table = "solicitudes_profesionales";


    public static function consultarSolicitudesPorProfesional($idUsuario) {
        try {
            return SolicitudesProfesionales::select(
                'solicitudes_profesionales.*',
                'profesionales_servicios.*',
                'servicios.*',
                'profesionales.*'
                )
                ->join('profesionales_servicios','solicitudes_profesionales.id_profesionales','=','profesionales_servicios.id')
                ->join('servicios','profesionales_servicios.id_servicios','=','servicios.id')
                ->join('profesionales','profesionales_servicios.id_profesionales','=','profesionales.id')
                ->where('profesionales.id_usuarioS',$idUsuario)
                ->get()
                ->toArray();
        } catch (Exception $e) {
            return array();
        }
    }


    public static function consultarTodasLasSolicitudes() {
        try {
            return SolicitudesProfesionales::select(
                'solicitudes_profesionales.*',
                'profesionales_servicios.*',
                'servicios.*',
                'profesionales.*'
                )
                ->join('profesionales_servicios','solicitudes_profesionales.id_profesionales','=','profesionales_servicios.id')
                ->join('servicios','profesionales_servicios.id_servicios','=','servicios.id')
                ->join('profesionales','profesionales_servicios.id_profesionales','=','profesionales.id')
                ->get()
                ->toArray();
        } catch (Exception $e) {
            return array();
        }
    }
}