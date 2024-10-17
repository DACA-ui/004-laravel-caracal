<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionDocenteTempTable extends Migration
{
    public function up()
    {
        Schema::create('asignacion_docente_temp', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('docente'); // Nombres y apellidos
            $table->string('dni', 8); // DNI del docente
            $table->string('departamento'); // Departamento del docente
            $table->foreignId('estadoId')->constrained('estado_declaracion_docente'); // FK a estado_declaracion_docente
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('asignacion_docente_temp');
    }
}
