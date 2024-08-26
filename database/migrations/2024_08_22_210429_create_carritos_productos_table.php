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
        Schema::create('carritos_productos', function (Blueprint $table) {
            $table->increments('id_carrito_producto');
            $table->unsignedInteger('id_carrito');
            $table->unsignedInteger('id_producto');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->timestamps();

            $table->foreign('id_carrito')->references('id_carrito')->on('carritos');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carritos_productos');
    }
};
