<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController1 extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    
    public function contactSubmit(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'mensaje' => 'required|string|max:1000',
        ]);
        
        // Aquí iría la lógica para procesar el contacto
        // Por ejemplo, enviar un email o guardar en la base de datos
        
        return back()->with('success', 'Mensaje enviado correctamente');
    }
}