<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Detalle_Venta', function (Blueprint $table) {
            $table->increments('id_detalle_venta');
            $table->double('precio_total');
            $table->integer('cantidad');
            $table->unsignedInteger('fk_usuario');
            $table->unsignedInteger('fk_producto');

            $table->foreign('fk_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('fk_producto')->references('id_producto')->on('Producto');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Detalle_Venta');
    }
};
