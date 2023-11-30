<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        //
        $email
        $alumnoEmail = ["alumno@gmail.com"];
        $profesorEmail = ["profesor@gmail.com"];
        $adminEmail = ["admin@gmail.com"];
        switch ($email){
            case 1:
                return $alumnoEmail
                break;
            case 2:
                return $email
        }
    }
}
