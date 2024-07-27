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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_pedido');
            $table->unsignedBigInteger('fk_producto');
            $table->unsignedInteger('cantidad');
            $table->double('precio', 8, 2);
            $table->timestamps();


            $table->foreign('fk_pedido')->references('id')->on('pedidos')->onDelete('cascade');
            $table->foreign('fk_producto')->references('id')->on('productos')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
