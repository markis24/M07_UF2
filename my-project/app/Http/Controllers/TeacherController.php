<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index (){
        // Retornar els usuaris que son professors
        $llistaProf= Usuario::where('rol','professor')->get();
        return View("centre.index")->with('llistaProf',$llistaProf);
    }
    function create(){
        //Mostrarem la pantalla del formulari per crear un nou registre
        return View("professor.add");
    }
    function edit($id){
        // A partir de l'id fem una consulta de l'usuari
        // Mostrem la pantalla de formulari amb els valors de la consulta
        $profesor = Usuario::find($id);
        return View("professor.editar")->with('prof',$profesor);
    }
    function store(Request $request){
        $usuario = new Usuario();

        $usuario->nom = $request->nom;

        $usuario->save();
        $llistaProf= Usuario::where('rol','professor')->get();
        return View("centre.index")->with('llistaProf',$llistaProf);
    }
}
