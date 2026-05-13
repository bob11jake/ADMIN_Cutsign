<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nodo extends Model
{
    protected $table = 'nodo';
    protected $primaryKey = 'id_nodo';
    protected $fillable = ['nombre_nodo', 'id_tema', 'nivel', 'orden_nodo'];
    public $timestamps = false;
}
