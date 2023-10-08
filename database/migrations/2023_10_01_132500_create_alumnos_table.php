<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('idalumno');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fechanacimiento');
            $table->string('direccion');
            $table->string('genero');
            $table->string('telefono');
            $table->string('correo')->unique();
            $table->string('clave');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};