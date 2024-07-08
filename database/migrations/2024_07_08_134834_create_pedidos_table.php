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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha_pedido');
            $table->double('Precio_Total');
            $table->integer('Cantidad_producto');
            $table->timestamps();
            $table->unsignedBigInteger('fk_producto');
            $table->unsignedBigInteger('fk_usuario');


            $table->foreign('fk_producto')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('fk_usuario')->references('id')->on('usuarios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
