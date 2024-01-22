<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index()
    {
        // Retornar els usuaris que son professors
        $professors = Usuari::where('rol', 'professor')->get();
        return View("admin.centre")->with('professors', $professors);
    }
    function create()
    {
        //Mostrarem la pantalla del formulari per crear un nou registre
        return View("prof.create");
    }
    function edit($id)
    {
        // A partir de l'id fem una consulta de l'usuari
        // Mostrem la pantalla de formulari amb els valors de la consulta
        $professor = Usuari::find($id);
        return View("prof.edit")->with('prof', $professor);
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
        $professors = Usuari::where('rol', 'professor')->get();
        return view("admin.centre")->with('professors', $professors);
    }




    public function show($id)
    {
        $usuari = Usuari::find($id);
        return view('prof.show');
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
                'active' => 'boolean',
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
                    return view('users.alumne')->with('email', $email)->with('title', 'Iniciar sesión con un usuario');
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
            return abort(404); // Manejar el caso en que el profesor no existe
        }

        $usuari->delete();
        return view("admin.centre");
    }
}
