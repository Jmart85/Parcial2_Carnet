<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $primaryKey = 'idcursos';

    protected $fillable = [
        'nombrecurso',
        'año',
        'ciclo',
        'idprofesor',
    ];

    // Resto de la definición del modelo...
}

