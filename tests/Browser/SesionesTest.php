<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SesionesTest extends DuskTestCase
{
    use DatabaseTransactions;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    /**
     * @group sesiones
     */
    public function testSesiones()
    {
        /*
        $user1 = factory(User::class)->create([
            'email' => 'usuario1@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user2 = factory(User::class)->create([
            'email' => 'usuario2@gmail.com',
            'password' => bcrypt('123456')
        ]);


       $this->browse(function (Browser $browser){
            $browser->visit('/login')
                    ->type('email', 'usuario1@gmail.com')
                    ->type('password', '123456')
                    ->press('Aceptar')
                    ->assertSee('Bienvenido');
        });
       
       

       $this->browse(function (Browser $browser){
            $browser->visit('/login')
                    ->type('email', 'usuario2@gmail.com')
                    ->type('password', '123456')
                    ->press('Aceptar')
                    ->assertSee('Bienvenido');
        });
        */
        
        $user= factory(User::class)->create([
            'password'=>bcrypt('123456')
            ]);

       $this->browse(function (Browser $browser) use ($user){
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', '123456')
                    ->press('Aceptar')
                    ->visit('/sessions')
                    ->assertSee($user->email);
                //->pause(1000);
        });
       User::destroy($user->id);
     //  User::destroy($user1->id);
      // User::destroy($user2->id);
    }
}
