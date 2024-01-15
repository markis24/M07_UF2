<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Comprobar email y password 
        $email = $request->input('email');
        
        $userType = '';
        // Realiza la comprobación directamente en el bloque switch
        switch ($email) {
            case 'professor1@iticbcn.cat':
            case 'professor2@iticbcn.cat':
                $userType = 'profesor'; // Si es un profesor, establecer el tipo de usuario como 'profesor'
                break;
            case 'alumno1@iticbcn.cat':
            case 'alumno2@iticbcn.cat':
                $userType = 'alumno'; // Si es un alumno, establecer el tipo de usuario como 'alumno'
                break;
            case 'admin1@iticbcn.cat':
            case 'admin2@iticbcn.cat':
                $userType = 'admin'; // Si es un administrador, establecer el tipo de usuario como 'admin'
                break;
            default:
                // Manejar caso por defecto o redirigir con mensaje de error
                return redirect()->route('errorAcces.index'); // Si no coincide con ningún caso, redirigir a la ruta de error
                break;
        }

        // Según el tipo de usuario, mostrar la vista correspondiente
        switch ($userType) {
            case 'admin':
                return view('admin.centre')->with('email', $email);
                break;

            case 'professor':
                return view('users.professor')->with('email', $email);
                break;
            case 'alumno':
                return view('users.alumne')->with('email', $email);
                break;
            default:
                return redirect()->route('errorAcces.index'); // Si el tipo de usuario no es reconocido, redirigir a la ruta de error
                break;
        }
    }
}
