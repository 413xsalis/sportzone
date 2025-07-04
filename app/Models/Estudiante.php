<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'documento';
    public $timestamps = false;

    // Relación con grupo_nivel
    public function grupoNivel()
    {
        return $this->belongsTo(GrupoNivel::class, 'id_grupo_nivel', 'id_grupo_nivel');
    }

    // Relación con grupo (por campo documento)
    public function grupo()
    {
        return $this->hasOne(Grupo::class, 'documento', 'documento');
    }
}

