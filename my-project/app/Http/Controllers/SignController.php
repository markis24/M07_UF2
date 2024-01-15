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
    public function SignIn(Request $request){
        

    }
    public function SignUp(Request $request){
        //dd(request());
        return redirect()->route('signin.index');

    }
    

}
