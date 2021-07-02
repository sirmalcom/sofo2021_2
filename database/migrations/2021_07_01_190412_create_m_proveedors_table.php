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
            $table->bigIncrements('id');
            $table->string('nombre',150);
            $table->unsignedBigInteger('idTDocumento');
            $table->string('numeroDocumento',11);
            $table->string('representante',150);
            $table->string('direcccion',150);
            $table->string('telefono',20);
            $table->boolean('estado');
            $table->foreign('idTDocumento')->references('id')->on('TDocumento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MProveedor');
    }
}
