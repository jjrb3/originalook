<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Usuarios extends Model
{
    public $timestamps = false;
    protected $table = "usuarios";
}