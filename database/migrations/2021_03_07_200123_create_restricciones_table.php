<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestriccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//clase    
        Schema::create('restricciones', function (Blueprint $table) {
            //Por defecto son not null
            $table->increments('id');
            $table->string('nombre', 50);
           // $table->string('nombre')->nullable();si requiere que sea opcional
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
        Schema::dropIfExists('restricciones');
    }
}
