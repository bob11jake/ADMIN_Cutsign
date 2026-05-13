<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progreso extends Model
{
    protected $table = 'progreso';
    protected $primaryKey = 'id_progreso';
    protected $fillable = ['id_usuario', 'id_nodo', 'estado'];
    public $timestamps = false;
}
