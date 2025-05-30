<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\View\View; 

class InstructorController extends Controller
{
    /**
     * Muestra la vista principal del instructor
     */
    public function principal(): View
    {
        return view('instructor.inicio.principal'); 
    }
}

    // public function formulario()
    // {
    //     return view('instructor.formulario.principal'); // Asegúrate de que esta vista exista
    // }
