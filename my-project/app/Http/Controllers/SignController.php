<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{

    public function showSignIn()
    {
        return view('forms.signIn')->with('title', 'Iniciar sessió amb un usuari');
    }

    public function showSignUp()
    {
        return view('forms.signUp')->with('title', "Creació d'un nou usuari");
    }
    public function SignIn(Request $request)
    {
    }

    public function SignUp(Request $request)
    {
        // Después de la inserción, nos redirecciona a la ruta 'signin.index'
        return ('<p>La inserció és correcte. <a href="' . route("signin.index") . '">Iniciar sessió usuari</a></p>');
    }
}
