<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos';
    protected $primaryKey = 'idalumno';

    protected $fillable = [
        'nombre',
        'apellido',
        'fechanacimiento',
        'direccion',
        'genero',
        'telefono',
        'correo',
        'clave',
    ];

    
}

