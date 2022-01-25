<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMallaCurricularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malla_curriculars', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->bigInteger('pnf');
            $table->bigInteger('nucleo');
            $table->integer('modalidad');
            $table->integer('periodos');
            $table->integer('trayectos');
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
        Schema::dropIfExists('malla_curriculars');
    }
}
