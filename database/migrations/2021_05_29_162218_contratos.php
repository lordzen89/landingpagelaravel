<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contratos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function(Blueprint $table){
            $table->id('idcontrato');
            $table->integer('tipocontrato');
            $table->string('idusuario');
            $table->text('observacion');
            $table->text('ruta');
            $table->timestamp('fechahora')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
