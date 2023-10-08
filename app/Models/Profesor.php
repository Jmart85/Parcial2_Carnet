<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table = 'profesor';
    protected $primaryKey = 'idprofesor';

    protected $fillable = [
        'nombre',
        'apellido',
        'dui',
        'telefono',
        'email',
        'clave',
    ];

    // Resto de la definición del modelo...
}
