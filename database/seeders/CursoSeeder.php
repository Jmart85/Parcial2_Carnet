<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;
class CursoSeeder extends Seeder
{
    public function run()
    {
        Curso::create([
            'nombrecurso' => 'Curso1',
            'año' => 2023,
            'ciclo' => 'Ciclo1',
            'idprofesor' => 2, // Debes ajustar este ID para que coincida con un profesor existente
        ]);

        // DB::table('cursos')->insert([
        //     'nombrecurso' => 'Curso1',
        //     'año' => 2023,
        //     'ciclo' => 'Ciclo1',
        //     'idprofesor' => 1, // Debe corresponder al ID de un profesor existente en la tabla 'profesor'
        // ]);
        
       
    }
}
