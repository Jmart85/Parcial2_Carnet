<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Profesor;
use Illuminate\Support\Facades\DB;
class ProfesorSeeder extends Seeder
{
    public function run()
    {
        Profesor::create([
            'idprofesor' => 2,
            'nombre' => 'Jorge',
            'apellido' => 'Coto',
            'dui' => '12345678-9',
            'telefono' => '987654321',
            'email' => 'profesor@correo.com',
            'clave' => bcrypt('contraseña'),

        ]);
        // DB::table('profesor')->insert([
        //     'nombre' => 'Jorge',
        //     'apellido' => 'CotoCoto',
        //     'dui' => '12345678-8',
        //     'telefono' => '987654323',
        //     'email' => 'ejem@correo.com',
        //     'clave' => bcrypt('contraseña'),
        // ]);
        
     
    }
}
