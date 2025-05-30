<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index(Request $request)
    {
        $query = Estudiante::query();

        if ($request->filled('q')) {
            $q = $request->q;
            $query->where('first_name', 'like', "%{$q}%")
                  ->orWhere('last_name',  'like', "%{$q}%")
                  ->orWhere('username',   'like', "%{$q}%");
        }

        $estudiantes = $query->paginate(10);

        return view('instructor.formulario.principal', compact('estudiantes'));
    }

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
