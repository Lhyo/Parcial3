<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class usuariosSeeder extends Seeder {
    public function run(){
/*
        Usuarios::create(array(
            'nombre'  => 'leo',
            'email'     => 'leo@gmail.com',
            'password' => Hash::make('1234') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
       ));*/
		DB::table('usuarios')->insert([
			[
				'usuario' => 'leonardo',
            	'email' => 'leo@gmail.com',
                'password' => '123456'
                ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'leonardo',
                'email' => 'leo@gmail.com',
                'password' =>'123456'
                ]
        ]);
    }
}