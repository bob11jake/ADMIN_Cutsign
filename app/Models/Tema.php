<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table = 'tema';
    protected $primaryKey = 'id_tema';
    protected $fillable = ['nombre_tema', 'descripcion'];
    public $timestamps = false; // Solo si no agregaste created_at/updated_at
}
