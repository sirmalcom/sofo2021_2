<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MVenta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('fechaVenta');
            $table->string('numeroSerie',50);
            $table->decimal('subtotal',8,2);
            $table->decimal('total',8,2);
            $table->decimal('ganancia',8,2);
            $table->boolean('estado');
            $table->unsignedBigInteger('idTComprobante');
            $table->unsignedBigInteger('idMCliente');
            $table->unsignedBigInteger('idMUsuario');
            $table->foreign('idMCliente')->references('id')->on('MCliente');
            $table->foreign('idMUsuario')->references('id')->on('MUsuario');
            $table->foreign('idTComprobante')->references('id')->on('TComprobante');
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
        //Schema::dropIfExists('MVenta');
        $table->dropSoftDeletes();
    }
}
