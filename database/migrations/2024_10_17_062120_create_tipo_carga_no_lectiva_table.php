<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoCargaNoLectivaTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_carga_no_lectiva', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('descripcion'); // Descripción del tipo de carga
            $table->boolean('isDeleted')->default(false); // Para soft delete
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_carga_no_lectiva');
    }
}
