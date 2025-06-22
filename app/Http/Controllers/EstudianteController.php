<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function create()
    {
        return view('estudiantes.create'); // o la vista correcta si usas otra ruta
    }

    public function store(Request $request)
    {
        $request->validate([
            'documento'          => 'required|integer|unique:estudiantes,documento',
            'nombre_1'           => 'required|string|max:255',
            'nombre_2'           => 'required|string|max:255',
            'apellido_1'         => 'required|string|max:255', 
            'apellido_2'         => 'required|string|max:255',
            'telefono'           => 'nullable|string|max:20',
            'nombre_contacto'    => 'nullable|string|max:255',
            'telefono_contacto'  => 'nullable|string|max:20',
            'eps'                => 'nullable|string|max:255',
            'id_grupo_nivel'     => 'nullable|integer',
        ]);

        Estudiante::create($request->all());

        return redirect()->back()->with('success', 'Estudiante inscrito correctamente.');
    }
}
