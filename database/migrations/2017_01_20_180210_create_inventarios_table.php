<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios',function(Blueprint $table){
            $table->increments('id');
            $table->string('acta',50);
            $table->string('blNo',50);
            $table->string('atraque',50);
            $table->string('consignatario');
            $table->string('viaje');
            $table->string('atraque');
            $table->string('embalaje');
            $table->string('peso');
            $table->string('Patio');
            $table->string('Puerto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inventarios');
    }
}
