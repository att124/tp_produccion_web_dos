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

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->date('Fecha_ingreso')->nullable()->default(DB::raw('CURRENT_DATE'));
            $table->boolean('Activo')->default(true);
            $table->unsignedBigInteger('fk_rol')->nullable()->default(2);
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
        Schema::dropIfExists('users');

    }
};
