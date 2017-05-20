<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Documentos extends Model
{
    public $timestamps = false;
    protected $table = "documentos";
}