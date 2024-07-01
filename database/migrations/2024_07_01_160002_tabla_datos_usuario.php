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
        Schema::create('Datos_Usuario', function (Blueprint $table) {
            $table->increments('id_Datos_Usuario');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Mail');
            $table->string('Telefono');
            $table->integer('DNI');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Datos_Usuario');
    }
};
