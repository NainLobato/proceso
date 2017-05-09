<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnidadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 128);
            $table->string('direccion', 256);
            $table->string('latitud', 128);
            $table->string('longitud', 128);
            $table->integer('idFiscal');
            $table->string('telefono', 128);
            $table->integer('distrito');
            $table->string('region', 128);
            $table->string('clave', 128);
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
        Schema::drop('unidads');
    }
}
