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
        Schema::create('inasistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asistencia_detalle_id');
            $table->unsignedBigInteger('alumno_id');
            
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('asistencia_detalle_id')->references('id')->on('asistencia_detalles');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inasistencias');
    }
};
