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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->unsignedInteger('id_usuario',5)->autoIncrement()->unique();
            $table->string('nombre',30);
            $table->string('telefono',9);
            $table->string('email',30)->unique();
            $table->string('contraseña',64);
            $table->string('rol',1)->default('C'); #A=Admin, C=Cliente
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
