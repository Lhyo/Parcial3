<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use DB;
use Hash;
use View;
class regsessionController extends Controller
{
    public function showSessions()
    {
    	$sesiones = DB::table('regsesiones')->get();
    	return View::make('sessions')->with('sesiones', $sesiones);;
    }
}
