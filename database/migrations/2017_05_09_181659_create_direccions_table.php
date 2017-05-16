<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDireccionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('calle', 256);
            $table->string('numeroInterior', 10);
            $table->string('numeroExterior', 10);
            $table->integer('idCodigo');
            $table->string('entreCalle1', 128);
            $table->string('entreCalle2', 128);
            $table->string('referencia', 256);
            $table->integer('idTipoLugar');
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
        Schema::drop('direccions');
    }
}
