<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class LoginTest extends DuskTestCase
{
    //use DatabaseMigrations;
    use DatabaseTransactions;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    /**
     * @group usuarios
     */
    public function testUsuarioIncorrecto()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'asdf@asdf.com')
                    ->type('password', 'secret')
                    ->press('Aceptar')
                    ->assertSee('Usuario incorrecto.');
        });   
    }

    /**
     * @group usuarios
     */
    public function testPasswordIncorrecto()
    {
        
        $user = factory(User::class)->create([
            'email' => 'usuarioX@gmail.com',
            'password' => bcrypt('123456')
        ]);

       $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'usuarioX@gmail.com')
                    ->type('password', 'secret')
                    ->press('Aceptar')
                    ->assertSee('Contraseña incorrecta.');
        });

       User::destroy($user->id);
    }

    /**
     * @group usuarios
     */
    public function testUsuarioCorrecto()
    {
        
        $user = factory(User::class)->create([
            'email' => 'usuarioX@gmail.com',
            'password' => bcrypt('123456')
        ]);

       $this->browse(function (Browser $browser){
            $browser->visit('/login')
                    ->type('email', 'usuarioX@gmail.com')
                    ->type('password', '123456')
                    ->press('Aceptar')
                    ->assertSee('Bienvenido');
        });
       User::destroy($user->id);
    }
}
