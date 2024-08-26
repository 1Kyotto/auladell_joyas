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
        Schema::create('personalizaciones', function (Blueprint $table) {
            $table->increments('id_personalizacion');
            $table->string('nombre',10);
            $table->text('descripcion');
            $table->decimal('costo_adicional', 8,2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personalizaciones');
    }
};
