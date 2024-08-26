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
            $table->id('id_pedido',5);
            $table->unsignedInteger('id_usuario',5)->nullable();
            $table->unsignedInteger('id_invitado',5)->nullable();
            $table->unsignedInteger('id_direccion',5);
            $table->decimal('total');
            $table->enum('estado',['En produccion','Enviado','Completado','Cancelado']);
            $table->timestamps();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_invitado')->references('id_invitado')->on('invitados');
            $table->foreign('id_direccion')->references('id_direccion')->on('direcciones_envios');
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
