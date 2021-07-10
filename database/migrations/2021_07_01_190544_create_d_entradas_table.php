<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DEntrada', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idMEntrada');
            $table->unsignedBigInteger('idMProducto');
            $table->date('fechaVencimiento');
            $table->decimal('precioCompra',8,2);
            $table->decimal('precioVenta',8,2);
            $table->integer('cantidad');
            $table->decimal('descuento',8,2);
            $table->decimal('importe',8,2);
            $table->foreign('idMEntrada')->references('id')->on('MEntrada');
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
        //Schema::dropIfExists('DEntrada');
        $table->dropSoftDeletes();
    }
}
