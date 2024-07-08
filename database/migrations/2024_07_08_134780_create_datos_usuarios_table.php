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
        Schema::create('datos_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->string('apellido',45);
            $table->string('mail',90);
            $table->integer('dni');

            $table->string('calle',50);
            $table->integer('altura');
            $table->integer('piso')->nullable();

            $table->unsignedBigInteger('fk_provincia');
            $table->unsignedBigInteger('fk_localidad');

            $table->timestamps();

            $table->foreign('fk_provincia')->references('id')->on('provincias')->onDelete('cascade');
            $table->foreign('fk_localidad')->references('id')->on('localidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_usuarios');
    }
};
