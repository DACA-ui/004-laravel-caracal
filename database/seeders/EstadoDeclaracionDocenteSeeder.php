<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstadoDeclaracionDocente; // Importa el modelo

class EstadoDeclaracionDocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoDeclaracionDocente::create([
            'descripcion' => 'Completo',
            'isDeleted' => false
        ]);

        EstadoDeclaracionDocente::create([
            'descripcion' => 'Incompleto',
            'isDeleted' => false
        ]);
    }
}
