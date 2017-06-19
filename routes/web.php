<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


// Nos mostrará el formulario de login.
Route::get('login', 'loginController@showLogin');
// Validamos los datos de inicio de sesión.
Route::post('login', 'loginController@postLogin');

Route::get('sessions', 'regsessionController@showSessions');
Route::get('/', function()
    {
        return View::make('welcome');
    });

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
	Route::get('secureZone', 'loginController@showZone');
    
    Route::get('logout', 'loginController@logOut');
});



//Auth::routes();