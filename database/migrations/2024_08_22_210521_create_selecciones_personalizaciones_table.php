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
        Schema::create('selecciones_personalizaciones', function (Blueprint $table) {
            $table->id('id_seleccion_personalizacion',5);
            $table->unsignedInteger('id_pedido_producto',5);
            $table->unsignedInteger('id_personalizacion',5);
            $table->integer('cantidad');
            $table->foreign('id_pedido_producto')->references('id_pedido_producto')->on('pedidos_productos');
            $table->foreign('id_personalizacion')->references('id_personalizacion')->on('personalizaciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seleccion_personalizaciones');
    }
};
