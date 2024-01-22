<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $consulta = Usuari::where("email", $email)->first();



        // $userType = $this->getUserType($email);

        if ($consulta) {
            switch ($consulta->rol) {
            case 'professor':
                $alumnes = Usuari::where("rol","alumne")->get();
                return view('users.professor')->with('email', $email)->with('title', 'Iniciar sessió amb un usuari')->with('alumnes',$alumnes);
                break;
            case 'alumne':
                return view('users.alumne')->with('email', $email)->with('title', 'Iniciar sessió amb un usuari');
                break;
            case 'admin':
                $professors = Usuari::where("rol", "professor")->get();
                return view('admin.centre')->with('email', $email)->with('title', 'Iniciar sessió amb un usuari')
                    ->with('professors', $professors);
                break;
            default:
                return redirect()->route('errorAcces.index'); // Si no coincide con ningún caso, redirigir a la ruta de error
        }
    }
    }
/*
    private function getUserType($email)
    {

        $professors = ['oriol@iticbcn.cat', 'roger@iticbcn.cat', 'carlota@iticbcn.cat'];

        $alumnes = ['bilal@iticbcn.cat', 'marco@iticbcn.cat', 'jostin@iticbcn.cat'];
        $admins = ['admin@iticbcn.cat', 'admin2@iticbcn.cat'];

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
    */
}
