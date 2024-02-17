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
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materia_id');
            $table->unsignedBigInteger('grupo_id');
            $table->unsignedBigInteger('maestro_id');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('maestro_id')->references('id')->on('maestros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clases');
    }
};
