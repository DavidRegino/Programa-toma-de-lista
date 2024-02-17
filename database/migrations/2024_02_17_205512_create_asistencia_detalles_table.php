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
        Schema::create('asistencia_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clase_id');

            $table->timestamps();

            $table->softDeletes();

            $table->foreign('clase_id')->references('id')->on('clases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencia_detalles');
    }
};
