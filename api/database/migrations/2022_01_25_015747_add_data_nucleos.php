<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddDataNucleos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('nucleos')->insert([
            array(
                'nombre' => 'La Floresta',
                'crea' => 'Antonio José de Sucre',
                'dir' => 'Av.Principal de la Floresta crucé con Av.Francisco de Miranda, Edificio.',
                'tlf' => 0
            ),
            array(
                'nombre' => 'Altagracia',
                'crea' => 'Francisco de Miranda',
                'dir' => 'Esquina de Mijares, Avenida Oeste 3, Parroquia Altagracia.',
                'tlf' => 0
            ),
            array(
                'nombre' => 'La Urbina',
                'crea' => 'Josefina Pepita Machado',
                'dir' => 'Calle 8,Zona Industrial, Edificio Mercurio.',
                'tlf' => 0
            ),
            array(
                'nombre' => 'Los Cedros',
                'crea' => 'Carmen Clemente Travieso',
                'dir' => 'Av.Libertador, Urbanización Los Cedros, Municipio Chacao.',
                'tlf' => 0
            )
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nucleos', function (Blueprint $table) {
            
        });
    }
}
