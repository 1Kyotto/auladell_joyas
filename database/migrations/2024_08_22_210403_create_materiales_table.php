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
        Schema::create('materiales', function (Blueprint $table) {
            $table->increments('id_material');
            $table->string('nombre',30);
            $table->text('descripcion');
            $table->string('unidad',10); //Unidad de medida: gr, kg, kl...
            $table->decimal('precio_por_unidad',8,2); //Precio por cada unidad de medida
            $table->decimal('cantidad_en_stock',5,2); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales');
    }
};
