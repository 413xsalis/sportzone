<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Asegúrate de importar el modelo Product

class AdminController extends Controller
{
    /**
     * Muestra la vista principal del administrador
     */
    public function principal()
    {
        return view('administrador.admin.principal');
    }

    /**
     * Muestra la gestión de usuarios con productos
     */
    public function gestion()
    {
        $products = Product::all(); // Obtener todos los productos
        return view('administrador.Gestion_usuarios.principal', compact('products'));
    }

    public function formulario()
    {
        return view('administrador.Formulario_empleados.principal');
    }

    // Este método index parece redundante, puedes eliminarlo si no se usa

        public function create()
    {
        return view('administrador.Gestion_usuarios.create');
    }
}