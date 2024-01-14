<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    
    public function showSignIn()
    {
        return view('formularios.signIn')->with('title', 'Iniciar sessió amb un usuari');
    }
    
    public function showSignUp()
    {
        return view('formularios.signUp')->with('title', "Creació d'un nou usuari");
    }

}
