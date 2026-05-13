<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Nombre de la tabla en phpMyAdmin
    protected $table = 'usuario'; 

    // Nombre de la llave primaria
    protected $primaryKey = 'id_usuario'; 

    // Solo permitimos el nombre_usuario (el ID es autoincremental)
    protected $fillable = ['nombre_usuario']; 

    // DESACTIVAR TIMESTAMPS (Esto quita el Error 500 si no tienes created_at)
    public $timestamps = false; 
}