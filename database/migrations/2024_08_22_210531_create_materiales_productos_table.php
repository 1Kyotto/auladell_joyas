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
        Schema::create('materiales_productos', function (Blueprint $table) {
            $table->unsignedInteger('id_material_producto',5)->autoIncrement()->unique();
            $table->unsignedInteger('id_producto',5);
            $table->unsignedInteger('id_material',5);
            $table->decimal('cantidad_necesaria', 8, 2);

            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_material')->references('id_material')->on('materiales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales_productos');
    }
};
