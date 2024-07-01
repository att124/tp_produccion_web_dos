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
        Schema::create('Producto', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('titulo');
            $table->integer('Stock');
            $table->binary('imagen1');
            $table->binary('imagen2')->nullable(); // Puede ser null
            $table->binary('imagen3');
            $table->binary('imagen4');
            $table->unsignedInteger('fk_categoria');
            $table->unsignedInteger('fk_marca');



            $table->foreign('fk_categoria')->references('idCategoria')->on('categoria');
            $table->foreign('fk_marca')->references('id_Marca')->on('Marca');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Producto');
    }
};
