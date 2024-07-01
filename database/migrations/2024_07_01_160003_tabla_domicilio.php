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
        Schema::create('Domicilio', function (Blueprint $table) {
            $table->increments('id_domicilio');
            $table->string('Calle');
            $table->integer('Altura');
            $table->integer('Piso');
            $table->tinyInteger('Departamento');
            $table->unsignedInteger('localidad_id');
            $table->unsignedInteger('provincia_id');
            $table->unsignedInteger('datos_usuario_id');

            $table->foreign('localidad_id')->references('id_Localidad')->on('Localidad');
            $table->foreign('provincia_id')->references('Id_provincia')->on('Provincia');
            $table->foreign('datos_usuario_id')->references('id_Datos_Usuario')->on('Datos_Usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Domicilio');
    }
};
