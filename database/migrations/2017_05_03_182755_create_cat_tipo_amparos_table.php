<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatTipoAmparosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    /*    Schema::create('cat_tipo_amparos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoAmparo', 256);
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
        Schema::drop('cat_tipo_amparos');
    }
}
