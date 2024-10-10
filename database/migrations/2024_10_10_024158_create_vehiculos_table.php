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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id('id_vehiculo');
            $table->unsignedBigInteger('conductor_id');
            $table->unsignedBigInteger('propietario_id');
            $table->unsignedBigInteger('tipo_vehiculo_id');
            $table->unsignedBigInteger('marca_id');
            $table->string('placa');
            $table->string('color');
            $table->timestamps();

            //Relacion de conductor con vehiculo
            $table->foreign('conductor_id')->references('id_persona')->on('personas');

            //Relacion de propietario con vehiculo
            $table->foreign('propietario_id')->references('id_persona')->on('personas');

            //Relacion de tipo_vehiculos con Vehiculo
            $table->foreign('tipo_vehiculo_id')->references('id_tipo_vehiculo')->on('tipo_vehiculos');

            //Relacion de marca con Vehiculo
            $table->foreign('marca_id')->references('id_marca')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
