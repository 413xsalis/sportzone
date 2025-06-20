<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;

class LibrosController extends Controller
{
    public function crear(){
        return view('administrador.Gestion_usuarios.crear');
    }

        public function store(request $request){
        $request->validate([
            'nombre'=>'required|string|max:255',
            'descripcion'=>'required|string',
            'autor'=>'required|string|max:255',
        ]);

        $libro = new Libros();
        $libro->nombre = $request->nombre;
        $libro->descripcion = $request-> descripcion;
        $libro->autor = $request->autor;


        $libro->save();

        return redirect()->back()->with('success', 'Libro creado con exito');


    }
}