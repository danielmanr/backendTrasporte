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
        Schema::create('personas', function (Blueprint $table) {
            $table->id('id_persona');
            $table->string('Cedula', 20)->unique();
            $table->string('Primer_nombre');
            $table->string('Segundo_nombre');
            $table->string('Apellidos');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Ciudad');
            $table->string('Correo')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
