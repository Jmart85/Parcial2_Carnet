<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
use Illuminate\Support\Facades\DB;
class AlumnoSeeder extends Seeder
{
    public function run()
    {
        Alumno::create([
            'idalumno' => 2,
            'nombre' => 'David',
            'apellido' => 'Ricolino',
            'fechanacimiento' => '2000-01-01',
            'direccion' => 'Dirección del Alumno',
            'genero' => 'Masculino',
            'telefono' => '123456789',
            'correo' => 'correo@alumno.com',
            'clave' => bcrypt('contraseña'),
        ]);

        // DB::table('alumnos')->insert([
          
        //     'nombre' => 'David',
        //     'apellido' => 'Martinez',
        //     'fechanacimiento' => '2001-01-01',
        //     'direccion' => 'los planes',
        //     'genero' => 'Masculino',
        //     'telefono' => '123456787',
        //     'correo' => 'ejemplo@alumno.com',
        //     'clave' => bcrypt('contraseña'),
        // ]);
        

    }
}



namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    public function run()
    {
    

        // Consulta SQL para seleccionar todos los alumnos
        $alumnos = DB::select('SELECT * FROM alumnos');

        foreach ($alumnos as $alumno) {
            // $alumno contiene los datos de cada alumno
            // Puedes acceder a los campos de cada alumno de la siguiente manera:
            $nombre = $alumno->nombre;
            $apellido = $alumno->apellido;
            // Y así sucesivamente para otros campos
        }
    }
}
