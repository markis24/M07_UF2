<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        // Retornar els usuaris que son alumnes
        $alumnes = Usuari::where('rol', 'alumne')->get();
        return View("users.professor")->with('alumnes', $alumnes);
    }
    function create()
    {
        //Mostrarem la pantalla del formulari per crear un nou registre
        return View("alum.create");
    }
    function edit($id)
    {
        // A partir de l'id fem una consulta de l'usuari
        // Mostrem la pantalla de formulari amb els valors de la consulta
        $alumne = Usuari::find($id);
        return View("alum.edit")->with('alum', $alumne);
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'rol' => 'required',
            'actiu' => 'boolean',
        ]);
        $usuari = new Usuari();

        $usuari = Usuari::create($request->all());
        $usuari->save();
        $alumnes = Usuari::where('rol', 'alumne')->get();
        return view("users.professor")->with('alumnes', $alumnes);
    }




    public function show($id)
    {
        $usuari = Usuari::find($id);
        return view('alum.show');
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        {
            $request->validate([
                'name' => 'required',
                'surname' => 'required',
                'email' => 'required|email',
                'rol' => 'required',
                'actiu' => 'boolean',
            ]);
        
            $usuari = Usuari::findOrFail($id);
        
            $usuari->update($request->all());
        
            $email = $request->input('email');

            switch ($usuari->rol) {
                case 'professor':
                    $professors = Usuari::where("rol", "professor")->get();
                    return view('admin.centre')->with('email', $email)->with('title', 'Iniciar sesión con un usuario')->with('professors', $professors);
                    break;

                case 'alumne':
                    $alumnes = Usuari::where("rol","alumne")->get();
                    return view('users.professor')->with('email', $email)->with('title', 'Iniciar sesión con un usuario')->with('alumnes', $alumnes);;
                    break;
                case 'admin':
                    $professors = Usuari::where("rol", "professor")->get();
                    return view('admin.centre')->with('email', $email)->with('title', 'Iniciar sesión con un usuario')->with('professors', $professors);
                    break;
                default:
                    return redirect()->route('errorAcces.index');
            }
        }    
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuari= Usuari::find($id);

        if (!$usuari) {
            return abort(404); // Manejar el caso en que el alumesor no existe
        }

        $usuari->delete();
        return view("users.professor");
    }
}
