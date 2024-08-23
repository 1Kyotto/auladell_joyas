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
        Schema::create('direcciones_envios', function (Blueprint $table) {
            $table->unsignedInteger('id_direccion',5)->autoIncrement()->unique();
            $table->unsignedInteger('id_usuario',5)->nullable();
            $table->unsignedInteger('id_invitado',5)->nullable();
            $table->string('ciudad',30);
            $table->string('comuna',30);
            $table->string('direccion',30);
            $table->timestamps();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_invitado')->references('id_invitado')->on('invitados');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direcciones_envios');
    }
};
