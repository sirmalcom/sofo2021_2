<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MCliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100);
            $table->unsignedBigInteger('idTDocumento');
            $table->string('numeroDocumento',11);
            $table->string('direccion',150);
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
        //Schema::dropIfExists('MCliente');
        $table->dropSoftDeletes();
    }
}
