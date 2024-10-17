<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCargaNoLectivaTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_carga_no_lectiva', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->foreignId('asignacionDocenteId')->constrained('asignacion_docente_temp'); // FK a asignacion_docente_temp
            $table->string('descripcion'); // Descripción de la carga no lectiva
            $table->integer('horas'); // Número de horas
            $table->foreignId('tipoId')->constrained('tipo_carga_no_lectiva'); // FK a tipo_carga_no_lectiva
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_carga_no_lectiva');
    }
}
