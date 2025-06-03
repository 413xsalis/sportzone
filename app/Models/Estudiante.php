<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $primaryKey = 'documento';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'documento',
        'nombre_1',
        'apellido_1',
        'telefono',
        'nombre_contacto',
        'telefono_contacto',
        'id_eps',
        'id_grupo_nivel',
        'activo',          // <-- agregamos aquí el nuevo campo
        'asistio',
    ];

    // Relaciones (si las tienes)...
    // public function eps()
    // {
    //     return $this->belongsTo(Eps::class, 'id_eps');
    // }

    // public function grupoNivel()
    // {
    //     return $this->belongsTo(GrupoNivel::class, 'id_grupo_nivel');
    // }
}


