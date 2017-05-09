<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImputadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imputados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPersona');
            $table->integer('idProceso');
            $table->integer('idDireccion');
            $table->boolean('esDetenido');
            $table->datetime('fechaDetencion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imputados');
    }
}
