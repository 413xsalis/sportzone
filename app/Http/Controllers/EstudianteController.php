<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //
    use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:estudiantes,email',
            'telefono' => 'nullable',
        ]);

        Estudiante::create($request->all());

        return redirect()->back()->with('success', 'Estudiante inscrito correctamente.');
    }
}

}
