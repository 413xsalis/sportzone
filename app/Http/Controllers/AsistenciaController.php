<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function guardar(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'id_grupo' => 'required|exists:grupos,id',
            'asistencia' => 'required|array',
        ]);

        $fecha = $request->input('fecha');
        $grupo = $request->input('id_grupo');
        $asistencias = $request->input('asistencia');

        foreach ($asistencias as $documento => $estado) {
            \App\Models\Asistencia::updateOrCreate(
                [
                    'fecha' => $fecha,
                    'documento_estudiante' => $documento,
                ],
                [
                    'id_grupo' => $grupo,
                    'estado' => $estado,
                ]
            );
        }

        return redirect()->back()->with('success', 'Asistencia guardada correctamente.');
    }

    public function seleccionarGrupo()
    {
        $grupos = Grupo::all();
        return view('instructor.asistencia.principal', compact('grupos'));
    }

    public function tomarAsistencia($id)
    {
        $grupo = \App\Models\Grupo::where('nombre', $nombre)->firstOrFail();
        $estudiantes = \App\Models\Estudiante::where('id_grupo', $nombre)->get(); 
        
        return view('instructor.asistencia.principal', compact('grupo', 'estudiantes'));
    }
}
