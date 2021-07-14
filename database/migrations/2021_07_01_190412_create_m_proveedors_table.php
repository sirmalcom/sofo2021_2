<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MProveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',150);
            $table->integer('idTDocumento')->unsigned();
            $table->string('numeroDocumento',11);
            $table->string('representante',150);
            $table->string('direcccion',150);
            $table->string('telefono',20);
            $table->foreign('idTDocumento')->references('id')->on('TDocumento');
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
        //Schema::dropIfExists('MProveedor');
        $table->dropSoftDeletes();
    }
}
