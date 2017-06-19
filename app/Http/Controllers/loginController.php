<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use DB;
use Hash;
use View;
class loginController extends Controller {

    //Mostrando el formulario de inicio de sesion
    public function showLogin()
    {
    	return view('login');
        /*
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->intended('hello');
        }
        */
    	/*
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/');
        }
        // Mostramos la vista login.blade.php
        return View::make('login');*/
    }

    public function resultSession($email,$password){
        $users = DB::table('users')->where('email', '=', $email)->first();
        if(is_null($users))
        {
            return "Bad user";
        }
        if(Hash::check($password, $users->password))
                return "Session";
        return "Invalid password";
        
    }

    public function insertRegSession($id,$name,$email,$date)
    {
        DB::table('regsesiones')->insertGetId(
                    ['id_user' => $id, 'nombre' => $name, 'email'=>$email, 'fecha'=>$date]
        );
    }

    public function postLogin(Request $request){

        //$users = DB::table('users')->where('email', '=', $request->email)->first();

        $resultado=$this->resultSession($request->email, $request->password);
        if($resultado=="Bad user")
        {
            return redirect()->action('loginController@showLogin')->with('error', 'Usuario incorrecto.');
        }
        else if($resultado=="Session")
        {
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
            {
                $users = DB::table('users')->where('email', '=', $request->email)->first();
                $this->insertRegSession($users->id,$users->name,$request->email,new \DateTime() );
            }
            return Redirect::to('secureZone')->with('status', 'Bienvenido!');
        }
        else if($resultado=="Invalid password")
            return redirect()->action('loginController@showLogin')->with('error', 'Contraseña incorrecta.');
        return Redirect::to('login');
    }

    public function showZone()
    {
        
        
        return view('secureZone');
    }

    public function logOut()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}