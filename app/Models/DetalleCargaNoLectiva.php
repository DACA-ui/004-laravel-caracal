<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCargaNoLectiva extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada
    protected $table = 'detalle_carga_no_lectiva';

    // Llave primaria
    protected $primaryKey = 'id';

    // Campos que pueden ser llenados masivamente (mass assignable)
    protected $fillable = [
        'asignacionDocenteId',
        'descripcion',
        'horas',
        'tipoId',
    ];

    // Relación: Un detalle pertenece a una asignación docente (AsignacionDocenteTemp)
    public function asignacionDocente()
    {
        return $this->belongsTo(AsignacionDocenteTemp::class, 'asignacionDocenteId');
    }

    // Relación: Un detalle tiene un tipo de carga no lectiva (TipoCargaNoLectiva)
    public function tipoCargaNoLectiva()
    {
        return $this->belongsTo(TipoCargaNoLectiva::class, 'tipoId');
    }
}
