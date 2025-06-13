<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColabController extends Controller
{
    /**
     * Muestra la vista principal del administrador
     */
    public function principal()
    {
        return view('colaborador.inicio_colab.principal'); // Asegúrate de que esta vista exista
    }
        public function gestion()
    {
        return view('colaborador.gestion_clases.principal'); // Asegúrate de que esta vista exista
    }

            public function inscripcion()
    {
        return view('colaborador.inscripcion_estudent.principal'); // Asegúrate de que esta vista exista
    }
                public function reportes()
    {
        return view('colaborador.reportes.principal'); // Asegúrate de que esta vista exista
    }
}