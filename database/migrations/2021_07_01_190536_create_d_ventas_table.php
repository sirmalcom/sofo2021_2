<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DVenta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMVenta')->unsigned();
            $table->integer('idMProducto')->unsigned();
            $table->integer('cantidad');
            $table->decimal('descuento',8,2);
            $table->decimal('importe',8,2);
            $table->foreign('idMVenta')->references('id')->on('MVenta');
            $table->foreign('idMProducto')->references('id')->on('MProducto');
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
        //Schema::dropIfExists('DVenta');
        $table->dropSoftDeletes();
    }
}
