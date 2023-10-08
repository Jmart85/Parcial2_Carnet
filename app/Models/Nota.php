<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'notas';
    protected $primaryKey = 'idnota';

    protected $fillable = [
        'nota1',
        'nota2',
        'nota3',
        'nota4',
        'promedio',
        'parcial',
        'idalumno',
        'idcursos',
        'idprofesor',
    ];

    // Resto de la definición del modelo...
}

