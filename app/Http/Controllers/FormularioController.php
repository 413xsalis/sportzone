<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    // Lista de estudiantes con buscador
    public function index(Request $request)
    {
        $query = Estudiante::query();

        if ($request->filled('q')) {
            $q = $request->q;
            $query->where('nombre_1', 'like', "%{$q}%")
                ->orWhere('apellido_1', 'like', "%{$q}%")
                ->orWhere('documento', 'like', "%{$q}%");
        }

        $estudiantes = $query->paginate(10);

        return view('instructor.formulario.principal', compact('estudiantes'));
    }

    // Mostrar formulario de registro
    public function crearEstudiante()
    {
        return view('instructor.formulario.crear_estudiante');
    }

    // Guardar nuevo estudiante
    public function guardarEstudiante(Request $request)
    {
        $request->validate([
            'documento'         => 'required|integer|unique:estudiantes,documento',
            'nombre_1'          => 'required|string|max:30',
            'apellido_1'        => 'required|string|max:30',
            'telefono'          => 'nullable|string|max:15',
            'nombre_contacto'   => 'nullable|string|max:30',
            'telefono_contacto' => 'nullable|string|max:15',
            'id_eps'            => 'nullable|integer|exists:eps,id',
            'id_grupo_nivel'    => 'nullable|integer|exists:grupo_nivel,id',
            // No validamos “activo” porque queremos que sea siempre true al crear
        ]);

        Estudiante::create([
            'documento'         => $request->documento,
            'nombre_1'          => $request->nombre_1,
            'apellido_1'        => $request->apellido_1,
            'telefono'          => $request->telefono,
            'nombre_contacto'   => $request->nombre_contacto,
            'telefono_contacto' => $request->telefono_contacto,
            'id_eps'            => $request->id_eps,
            'id_grupo_nivel'    => $request->id_grupo_nivel,
            // 'activo' se omite aquí porque ya tiene default(true) en la BD
            'asistio' => false, // mantén tu lógica de asistencia
        ]);

        return redirect()
            ->route('instructor.formulario.principal')
            ->with('success', 'Estudiante registrado correctamente.');
    }

    // Guardar asistencia
    public function asistencia(Request $request, Estudiante $estudiante)
    {
        $data = $request->validate([
            'asistencia' => 'required|in:0,1',
        ]);

        $estudiante->update([
            'asistio' => $data['asistencia'] === '1',
        ]);

        session()->flash('success', "Asistencia de {$estudiante->first_name} actualizada.");
        return back();
    }
}
