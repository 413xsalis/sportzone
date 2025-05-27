<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Muestra la vista principal del administrador
     */
    public function principal()
    {
        return view('administrador.admin.principal'); // Asegúrate de que esta vista exista
    }
        public function gestion()
    {
        return view('administrador.Gestion_usuarios.principal'); // Asegúrate de que esta vista exista
    }

            public function formulario()
    {
        return view('administrador.Formulario_empleados.principal'); // Asegúrate de que esta vista exista
    }
}