<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   	public function form(){
   		return view('register');
   	}

   	public function welcome(request $request){
   		$fnama = $request["fname"];
   		$lnama = $request["lname"];
   		$data = array('fnama' => $fnama, 'lnama'=> $lnama);
   		return view('welcomes', $data);
   	}
}
