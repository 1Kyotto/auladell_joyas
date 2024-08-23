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
            $table->unsignedInteger('id_carrito_producto',5)->autoIncrement()->unique();
            $table->unsignedInteger('id_carrito',5);
            $table->unsignedInteger('id_producto',5);
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
