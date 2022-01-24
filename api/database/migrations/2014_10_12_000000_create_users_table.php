<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usuario')->unique();
            $table->string('nombre');
            $table->string('nombre2');
            $table->string('apellido');
            $table->string('apellido2');
            $table->boolean('estatus');
            $table->bigInteger('pnf');
            $table->bigInteger('nucleo');
            $table->bigInteger('tlf_movil');
            $table->bigInteger('tlf_local');
            $table->string('nacimiento');
            $table->bigInteger('ci')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
