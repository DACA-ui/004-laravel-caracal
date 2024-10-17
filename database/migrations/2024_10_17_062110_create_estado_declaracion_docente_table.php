<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoDeclaracionDocenteTable extends Migration
{
    public function up()
    {
        Schema::create('estado_declaracion_docente', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('descripcion'); // Descripción del estado
            $table->boolean('isDeleted')->default(false); // Para soft delete
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('estado_declaracion_docente');
    }
}
