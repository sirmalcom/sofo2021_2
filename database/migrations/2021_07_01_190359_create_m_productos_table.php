<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MProducto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idTCategoria');
            $table->string('nombre',150);
            $table->string('descripcion',200);
            $table->integer('stock');
            $table->integer('stockMinimo');
            $table->decimal('ultimoCostoCompra',8,2);
            $table->decimal('ultimoCostoVenta',8,2);
            $table->decimal('ganancia',8,2);
            $table->boolean('estado');
            $table->foreign('idTCategoria')->references('id')->on('TCategoria');
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
        //Schema::dropIfExists('MProducto');
        $table->dropSoftDeletes();
    }
}
