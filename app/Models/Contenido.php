<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $table = 'contenido';
    protected $primaryKey = 'id_contenido';
    protected $fillable = ['id_nodo', 'tipo_contenido', 'url_contenido'];
    public $timestamps = false;
}
