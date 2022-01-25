<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenidoSinopticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido_sinopticos', function (Blueprint $table) {
            $table->id();
            $table->string('malla');
            $table->string('unidad_curricular');
            $table->integer('trayecto');
            $table->integer('creditos');
            $table->string('densidad');
            $table->string('hora_academica');
            $table->string('htea');
            $table->string('htei');
            $table->string('tipo');
            $table->string('thte');
            $table->longText('saberes');
            $table->longText('estrategias');
            $table->longText('recursos');
            $table->longText('evaluacion');
            $table->longText('referencias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenido_sinopticos');
    }
}
