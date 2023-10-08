<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('idcursos');
            $table->string('nombrecurso');
            $table->integer('año');
            $table->string('ciclo');
            $table->foreignId('idprofesor')->constrained('profesor', 'idprofesor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};

