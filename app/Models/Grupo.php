<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos'; // nombre de la tabla en la BD
    protected $primaryKey = 'nombre';
    public $incrementing = false; //porque 'nombre' no es numerico 
    public $timestamps = false;
}
