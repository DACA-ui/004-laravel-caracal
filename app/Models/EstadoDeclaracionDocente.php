<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoDeclaracionDocente extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada
    protected $table = 'estado_declaracion_docente';

    // Llave primaria
    protected $primaryKey = 'id';

    // Campos que pueden ser llenados masivamente (mass assignable)
    protected $fillable = [
        'descripcion',
        'isDeleted',
    ];

    // Relación: Un estado tiene muchas asignaciones de docentes
    public function asignacionesDocente()
    {
        return $this->hasMany(AsignacionDocenteTemp::class, 'estadoId');
    }
}
