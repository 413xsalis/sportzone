<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos'; 
    protected $primaryKey = 'nombre'; // si 'nombre' es realmente único
    public $incrementing = false; 
    public $timestamps = false;

    // Relación: un grupo pertenece a un grupo de nivel
    public function grupoNivel()
    {
        return $this->belongsTo(GrupoNivel::class, 'id_grupo_nivel', 'id_grupo_nivel');
    }

    // Relación con estudiante (por documento)
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'documento', 'documento');
    }
}

