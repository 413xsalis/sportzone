<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function principal()
    {
        return view('instructor.inicio.principal');
    }
}


