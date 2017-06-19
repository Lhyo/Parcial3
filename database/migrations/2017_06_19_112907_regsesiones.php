<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegSesiones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regsesiones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_user');
            $table->string('nombre');
            $table->string('email');
            $table->dateTime('fecha');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regsesiones');
    }
}
