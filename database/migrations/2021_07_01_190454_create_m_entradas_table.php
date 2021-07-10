<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MEntrada', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('fechaEntrada');  
            $table->string('numeroComprobante',100);
            $table->decimal('costoTotal',8,2);
            $table->unsignedBigInteger('idTComprobante');
            $table->unsignedBigInteger('idMUsuario');
            $table->unsignedBigInteger('idMProveedor');
            $table->foreign('idMUsuario')->references('id')->on('MUsuario');
            $table->foreign('idTComprobante')->references('id')->on('TComprobante');
            $table->foreign('idMProveedor')->references('id')->on('MProveedor');
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
       // Schema::dropIfExists('MEntrada');
       $table->dropSoftDeletes();
    }
}
