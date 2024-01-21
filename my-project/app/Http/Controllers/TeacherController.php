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
        
        $usuari = new Usuari();
        $usuari->name = $request->input('name'); // Suponiendo que 'nom' es el nombre correcto de la columna
        $usuari->surname = $request->input('surname');
        $usuari->email = $request->input('email');
        $usuari->rol = $request->input('rol');
        $usuari->actiu = $request->has('actiu'); // Suponiendo que 'actiu' es el nombre correcto de la columna
        $usuari->password = $request->input('password');
        $usuari->save();
        $professors = Usuari::where('rol', 'professor')->get();
        return view("admin.centre")->with('professors', $professors);

        /*
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:usuaris,email',
            'rol' => 'required',
            'actiu' => 'boolean',
        ]);
    
        $professor = new Usuari();
        $professor->name = $request->input('name'); // Suponiendo que 'nom' es el nombre correcto de la columna
        $professor->surname = $request->input('surname');
        $professor->email = $request->input('email');
        $professor->rol = $request->input('rol');
        $professor->actiu = $request->has('actiu'); // Suponiendo que 'actiu' es el nombre correcto de la columna
        $professor->password = $request->input('password');

        $professor->save();
    
        $professors = Usuari::where('rol', 'professor')->get();
        return view("admin.centre")->with('professors', $professors);

        */
    }
    
    

    public function show($id)
    {
        $usuari = Usuari::find($id);
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
     {
         $request->validate([
             'name' => 'required',
             'surname' => 'required',
             'email' => 'required|email',
             'rol' => 'required',
             'actiu' => 'boolean',
         ]);
 
         $prof = Usuari::find($id);
     
         if (!$prof) {
             return abort(404); // Manejar el caso en que el profesor no existe
         }
     
         $prof->update([
             'name' => $request->input('name'),
             'surname' => $request->input('surname'),
             'email' => $request->input('email'),
             'rol' => $request->input('rol'),
             'actiu' => $request->has('actiu'),
             // Agregar otros campos según sea necesario
         ]);
     
         return redirect()->route('prof.index')->with('success', 'Profesor actualizado exitosamente.');
     }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $professor = Usuari::find($id);
        
        if (!$professor) {
            return abort(404); // Manejar el caso en que el profesor no existe
        }

        $professor->delete();
        return redirect()->route('admin.centre');
    }
}
