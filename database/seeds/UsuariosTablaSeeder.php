<?php

use Illuminate\Database\Seeder;

class UsuariosTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
                'password' => Hash::make('1234')
                ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'leonardo',
                'email' => 'leo@gmail.com',
                'password' => Hash::make('123456')
                ]
        ]);
    }
}
