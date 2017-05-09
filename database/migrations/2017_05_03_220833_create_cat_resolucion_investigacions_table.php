<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatResolucionInvestigacionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::create('cat_resolucion_investigacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ResolucionInvestigacion', 256);
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
        Schema::drop('cat_resolucion_investigacions');
    }
}
