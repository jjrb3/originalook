<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    public $timestamps = false;
    protected $table = "empleados_empresa";
}