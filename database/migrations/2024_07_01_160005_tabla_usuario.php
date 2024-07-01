<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('Usuario');
            $table->string('contraseña');
            $table->tinyInteger('activo');
            $table->date('fecha_ingreso');
            $table->unsignedInteger('fk_rol');
            $table->unsignedInteger('fk_datos_usuario');


            $table->foreign('fk_rol')->references('id_rol')->on('rol');
            $table->foreign('fk_datos_usuario')->references('id_Datos_Usuario')->on('Datos_Usuario');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
