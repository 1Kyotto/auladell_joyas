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
        Schema::create('personalizaciones_productos', function (Blueprint $table) {
            $table->increments('id_personalizacion_prod');
            $table->unsignedInteger('id_producto');
            $table->unsignedInteger('id_personalizacion');

            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_personalizacion')->references('id_personalizacion')->on('personalizaciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personalizaciones_productos');
    }
};
