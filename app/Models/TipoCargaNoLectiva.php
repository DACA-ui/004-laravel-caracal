<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCargaNoLectiva extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada
    protected $table = 'tipo_carga_no_lectiva';

    // Llave primaria
    protected $primaryKey = 'id';

    // Campos que pueden ser llenados masivamente (mass assignable)
    protected $fillable = [
        'descripcion',
        'isDeleted',
    ];

    // Relación: Un tipo tiene muchos detalles de carga no lectiva
    public function detallesCargaNoLectiva()
    {
        return $this->hasMany(DetalleCargaNoLectiva::class, 'tipoId');
    }
}
