<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    
    public function showSignIn()
    {
        return view('signIn')->with('title', 'Inicieu sessió amb un usuari');
    }
    
    public function showSignUp()
    {
        return view('signUp')->with('title', 'Creació de un nou usuari');
    }

}
