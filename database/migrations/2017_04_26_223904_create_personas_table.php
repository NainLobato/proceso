<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 256);
            $table->string('paterno', 256);
            $table->string('materno', 256);
            $table->string('alias', 255);
            $table->date('fechaNacimiento');
            $table->string('sexo', 16);
            $table->integer('idEtnia');
            $table->integer('idEscolaridad');
            $table->string('padre', 256);
            $table->integer('idReligion');
            $table->string('ine', 256);
            $table->string('rfc', 13);
            $table->timestamps();
            $table->softDeletes();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personas');
    }
}
