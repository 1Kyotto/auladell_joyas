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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id('id_inventario',5);
            $table->unsignedInteger('id_material',5);
            $table->unsignedInteger('realizado_por',5)->nullable();
            $table->decimal('cantidad', 8, 2);
            $table->enum('tipo_transaccion', ['Compra', 'Produccion', 'Ajuste']);
            $table->timestamp('fecha')->useCurrent();

            $table->foreign('id_material')->references('id_material')->on('materiales');
            $table->foreign('realizado_por')->references('id_usuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
