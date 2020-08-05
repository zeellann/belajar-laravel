<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(){
        return view('welcome');
    }

    public function welcome_get(Request $request){
        $nama = $request["first_name"].["last_name"];
        return view('welcome');
    } 
}
