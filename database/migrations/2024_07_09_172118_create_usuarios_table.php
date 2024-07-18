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
            $table->id();
            $table->string('usuario', 60)->unique();
            $table->string('contraseña', 60);
            $table->date('Fecha_ingreso');
            $table->boolean('Activo');
            $table->timestamps();

            $table->unsignedBigInteger('fk_rol');
            $table->unsignedBigInteger('fk_datos_usuario');


            $table->foreign('fk_rol')->references('id')->on('rols')->onDelete('cascade');
            $table->foreign('fk_datos_usuario')->references('id')->on('datousuarios')->onDelete('cascade');
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
