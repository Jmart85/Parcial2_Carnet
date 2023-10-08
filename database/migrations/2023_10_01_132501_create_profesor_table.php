<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->id('idprofesor');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('dui')->unique();
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('clave');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profesor');
    }
};
