<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatDelitosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_delitos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('delito', 256);
            $table->integer('idAgrupacion');
            $table->string('ndelnum', 3);
            $table->string('orden', 256);
            $table->boolean('activo');
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
        Schema::drop('cat_delitos');
    }
}
