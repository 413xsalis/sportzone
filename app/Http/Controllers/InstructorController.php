<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function principal()
    {
        return view('instructor.inicio.principal');
    }

    public function horario()
    {
        return view('instructor.horarios.principal');
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'documento' => 'required|unique:instructores,documento',
        'telefono' => 'nullable|string|max:20',
        'especialidad' => 'nullable|string|max:255',
    ]);

    \App\Models\Instructor::create($request->all());

    return redirect()->back()->with('success', 'Instructor registrado correctamente.');
}

public function index()
{
    $instructores = Instructor::all();
    return view('colaborador.inicio_colab.principal', compact('instructores'));
}

public function edit($id)
{
    $instructor = Instructor::findOrFail($id);
    return view('colaborador.inicio_colab.editar', compact('instructor'));
}

public function destroy($id)
{
    $instructor = Instructor::findOrFail($id);
    $instructor->delete();

    return redirect()->back()->with('success', 'Instructor eliminado correctamente.');
}


}