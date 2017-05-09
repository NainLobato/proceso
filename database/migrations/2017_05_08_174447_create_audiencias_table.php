<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAudienciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTipoAudiencia');
            $table->datetime('fecha');
            $table->integer('idJuez');
            $table->integer('idFiscal');
            $table->text('resolucion');
            $table->integer('idEtapa');
            $table->text('observaciones');
            $table->integer('idProceso');
            $table->integer('idImputado');
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
        Schema::drop('audiencias');
    }
}
