<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatecatEscolaridadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     /*   Schema::create('cat_escolaridads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('escolaridad', 255);
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
        Schema::drop('cat_escolaridads');
    }
}
