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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 85);
            $table->double('precio',  30, 2);
            $table->unsignedInteger('stock');
            $table->string('marca', 90);
            $table->text('descripcion');
            $table->text('especificacion');
            $table->boolean('visible')->default(true);
            $table->binary('imagen1');
            $table->binary('imagen2');
            $table->binary('imagen3')->nullable();
            $table->binary('imagen4')->nullable();
            $table->timestamps();


            $table->unsignedBigInteger('fk_categoria');

            $table->foreign('fk_categoria')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
