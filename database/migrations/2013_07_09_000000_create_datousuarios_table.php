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
        Schema::create('datousuarios', function (Blueprint $table) {
            $table->id();
            $table->string('apellido', 45);
            $table->unsignedInteger('dni')->unique();
            $table->string('localidad', 80);
            $table->string('calle', 50);
            $table->unsignedInteger('altura');
            $table->unsignedInteger('piso')->nullable();

            $table->timestamps();

            $table->unsignedBigInteger('fk_provincia');


            $table->foreign('fk_provincia')->references('id')->on('provincias')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datousuarios');
    }
};
