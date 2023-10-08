<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id('idnota');
            $table->decimal('nota1', 5, 2);
            $table->decimal('nota2', 5, 2);
            $table->decimal('nota3', 5, 2);
            $table->decimal('nota4', 5, 2);
            $table->decimal('promedio', 5, 2);
            $table->string('parcial');
            $table->foreignId('idalumno')->constrained('alumnos', 'idalumno');
            $table->foreignId('idcursos')->constrained('cursos', 'idcursos');
            $table->foreignId('idprofesor')->constrained('profesor', 'idprofesor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notas');
    }
};
