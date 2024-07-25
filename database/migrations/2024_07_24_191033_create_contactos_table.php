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
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo',20);
            $table->string ('asunto');
            $table->string('consulta',200);
            $table->string('respuesta',200)->nullable()->default(null);
            $table->boolean('estado')->default(false);

            $table->unsignedBigInteger('fk_user');

            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
