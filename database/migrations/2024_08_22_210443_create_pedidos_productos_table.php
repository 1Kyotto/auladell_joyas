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
        Schema::create('pedidos_productos', function (Blueprint $table) {
            $table->id('id_pedido_producto',5);
            $table->unsignedInteger('id_pedido',5);
            $table->unsignedInteger('id_producto',5);
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 8, 2);
            $table->decimal('precio_total', 8, 2);

            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos_productos');
    }
};
