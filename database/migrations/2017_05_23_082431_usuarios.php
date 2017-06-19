<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function($tabla) 
        {
 
            // id auto incremental primary key
            $tabla->increments('id');
            //varchar 50
            $tabla->string('usuario', 50);
            //varchar 100
            $tabla->string('email', 100);
            //varchar 200 para encriptar los passwords
            $tabla->string('password', 200);
 
            //campos para controlar inserts y updates
            //created_at updated_at
            $tabla->timestamps();
 
        });
/*
        DB::table('usuarios')->insert(
            array(
                'usuario' => 'leonardo',
                'email' => 'leo@gmail.com',
                'password' => Hash::make('1234')
            )
        );*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
