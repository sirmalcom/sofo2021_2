<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MUsuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario',50)->unique();
            $table->string('clave',50);
            $table->unsignedBigInteger('idTCargo');
            $table->foreign('idTCargo')->references('id')->on('TCargo');    
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
        //Schema::dropIfExists('MUsuario');
        $table->dropSoftDeletes();
    }
}
