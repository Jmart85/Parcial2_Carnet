<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Nota;
use Illuminate\Support\Facades\DB;
class NotaSeeder extends Seeder
{
    public function run()
    {
        Nota::create([
            'nota1' => 90,
            'nota2' => 85,
            'nota3' => 78,
            'nota4' => 92,
            'promedio' => 86.25,
            'parcial' => 'Primer Parcial',
            'idalumno' => 2, // Debes ajustar este ID para que coincida con un alumno existente
            'idcursos' => 3, // Debes ajustar este ID para que coincida con un curso existente
            'idprofesor' => 2, // Debes ajustar este ID para que coincida con un profesor existente
        ]);

        // DB::table('notas')->insert([
        //     'nota1' => 90,
        //     'nota2' => 85,
        //     'nota3' => 78,
        //     'nota4' => 92,
        //     'promedio' => 86.25,
        //     'parcial' => 'Primer Parcial',
        //     'idalumno' => 1, // Debe corresponder al ID de un alumno existente en la tabla 'alumnos'
        //     'idcursos' => 2, // Debe corresponder al ID de un curso existente en la tabla 'cursos'
        //     'idprofesor' => 1, // Debe corresponder al ID de un profesor existente en la tabla 'profesor'
        // ]);
        
    }
}
