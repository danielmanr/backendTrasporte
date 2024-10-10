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
        Schema::create('personas_vehiculos', function (Blueprint $table) {
            $table->id('id_persona_vehiculo');
            $table->unsignedBigInteger('vehiculo_id');
            $table->unsignedBigInteger('persona_id');
            $table->timestamps();

            //Relaciones muchos a muchos por personas a vehiculos
            $table->foreign('vehiculo_id')->references('id_vehiculo')->on('vehiculos')->onDelete('cascade');
            $table->foreign('persona_id')->references('id_persona')->on('personas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas_vehiculos');
    }
};
