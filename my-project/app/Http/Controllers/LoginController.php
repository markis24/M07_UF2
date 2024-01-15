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
                return view('professor')->with('email', $email);
                break;
            case 'alumne':
                return view('alumne')->with('email', $email);
                break;
            case 'admin':
                return view('centre')->with('email', $email);
                break;
            default:
                return redirect()->route('errorAcces.index'); // Si no coincide con ningún caso, redirigir a la ruta de error
            }
    }

    private function getUserType($email)
    {

        $professors = ['professor1@example.com', 'professor2@example.com'];
        $alumnes = ['alumne1@example.com', 'alumne2@example.com'];
        $admins = ['admin1@example.com', 'admin2@example.com'];

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
