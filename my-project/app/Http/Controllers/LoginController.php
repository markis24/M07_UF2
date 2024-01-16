<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $userType = $this->getUserType($email);

        switch ($userType) {
            case 'professor':
                return view('users.professor')->with('email', $email)->with('title', 'Iniciar sessió amb un usuari');
                break;
            case 'alumne':
                return view('users.alumne')->with('email', $email)->with('title', 'Iniciar sessió amb un usuari');
                break;
            case 'admin':
                return view('admin.centre')->with('email', $email)->with('title', 'Iniciar sessió amb un usuari');
                break;
            default:
                return redirect()->route('errorAcces.index'); // Si no coincide con ningún caso, redirigir a la ruta de error
            }
    }

    private function getUserType($email)
    {

        $professors = ['professor1@iticbcn.cat', 'professor2@iticbcn.cat'];
        $alumnes = ['alumne1@iticbcn.cat', 'alumne2@iticbcn.cat'];
        $admins = ['admin1@iticbcn.cat', 'admin2@iticbcn.cat'];

        if (in_array($email, $professors)) {
            return 'professor';
        } elseif (in_array($email, $alumnes)) {
            return 'alumne';
        } elseif (in_array($email, $admins)) {
            return 'admin';
        } else {
            return 'default';
        }
    }
}
