<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreModelo');
            $table->string('nombreMarca');
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->string('color');
            $table->integer('kilometraje');
            $table->timestamps();
            $table->foreign('Mantenimiento_id')->references('id')->on('mantenimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
};
