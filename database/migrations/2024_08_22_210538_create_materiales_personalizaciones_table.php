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
        Schema::create('materiales_personalizaciones', function (Blueprint $table) {
            $table->increments('id_material_personalizacion');
            $table->unsignedInteger('id_personalizacion');
            $table->unsignedInteger('id_material');
            $table->decimal('cantidad_necesaria');
            $table->foreign('id_personalizacion')->references('id_personalizacion')->on('personalizaciones');
            $table->foreign('id_material')->references('id_material')->on('materiales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales_personalizaciones');
    }
};
