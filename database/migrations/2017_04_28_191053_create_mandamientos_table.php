<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMandamientosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mandamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTipoMandamiento');
            $table->integer('idAudiencia');
            $table->string('numeroOficio', 128);
            $table->date('fechaOficio');
            $table->string('nombreGrupo', 256);
            $table->date('fechaRecepcion');
            $table->date('fechaAsignacion');
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
        Schema::drop('mandamientos');
    }
}
