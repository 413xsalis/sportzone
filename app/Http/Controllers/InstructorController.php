<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function principal()
    {
        return view('instructor.inicio.principal');
    }

    public function horarios()
    {
        return view('instructor.horario.principal');
    }
}


