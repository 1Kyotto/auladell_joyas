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
        Schema::create('pagos', function (Blueprint $table) {
            $table->unsignedInteger('id_pago',5)->autoIncrement()->unique();
            $table->unsignedInteger('id_pedido',5);
            $table->enum('metodo_pago',['Credito','Debito','Transferencia']);
            $table->decimal('valor');
            $table->enum('estado',['Confirmado','Cancelado','En transaccion','Fallido']);
            $table->timestamps();
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
