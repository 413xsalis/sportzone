<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    // Campos que podemos rellenar con mass assignment
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        // asigna aquí cualquier otro campo que ya exista, 
        // y añade 'asistio' si lo vas a migrar
    ];
}

