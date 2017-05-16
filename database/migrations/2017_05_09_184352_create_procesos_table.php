<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProcesosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUIPJ');
            $table->integer('anioCarpeta');
            $table->string('numeroCarpeta', 64);
            $table->integer('anioProceso');
            $table->string('numeroProceso', 64);
            $table->date('fechaInicioCarpeta');
            $table->integer('idFiscal');
            $table->integer('idJuez');
            $table->integer('idJuzgado');
            $table->date('fechaRadicacion');
            $table->boolean('conDetenido');
            $table->boolean('obsequiaOrden');
            $table->date('fechaOrden');
            $table->string('observaciones', 1024);
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
        Schema::drop('procesos');
    }
}
