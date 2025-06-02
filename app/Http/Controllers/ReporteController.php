use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

public function generarDesdeFormulario(Request $request)
{
    $fechaInicio = $request->input('fecha_inicio');
    $fechaFin = $request->input('fecha_fin');

    // Supongamos que tienes una tabla "clases"
    $datos = \App\Models\Clase::whereBetween('fecha', [$fechaInicio, $fechaFin])->get();

    $pdf = Pdf::loadView('reportes.pdf', compact('datos', 'fechaInicio', 'fechaFin'));

    return $pdf->download('reporte_clases.pdf');
}

