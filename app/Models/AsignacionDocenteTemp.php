<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionDocenteTemp extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada
    protected $table = 'asignacion_docente_temp';

    // Llave primaria
    protected $primaryKey = 'id';

    // Campos que pueden ser llenados masivamente (mass assignable)
    protected $fillable = [
        'docente', // Nombres y apellidos
        'dni',
        'departamento',
        'estadoId',
    ];

    // Relación: Un docente tiene un estado (EstadoDeclaracionDocente)
    public function estadoDeclaracionDocente()
    {
        return $this->belongsTo(EstadoDeclaracionDocente::class, 'estadoId');
    }

    // Relación: Un docente tiene muchos detalles de carga no lectiva (DetalleCargaNoLectiva)
    public function detallesCargaNoLectiva()
    {
        return $this->hasMany(DetalleCargaNoLectiva::class, 'asignacionDocenteId');
    }
}
