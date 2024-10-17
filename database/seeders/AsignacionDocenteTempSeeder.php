<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AsignacionDocenteTemp;

class AsignacionDocenteTempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar docentes en estado "Incompleto" (asumiendo que el estado 'Incompleto' tiene estadoId = 2)
        AsignacionDocenteTemp::create([
            'docente' => 'Juan Pedro Santos Fernandez',
            'dni' => '12345678',
            'departamento' => 'Departamento de Ingeniería de Sistemas',
            'estadoId' => 2, // Estado "Incompleto"
        ]);

        AsignacionDocenteTemp::create([
            'docente' => 'Luis Enrique Boy Chavil',
            'dni' => '23456789',
            'departamento' => 'Departamento de Ingeniería de Sistemas',
            'estadoId' => 2, // Estado "Incompleto"
        ]);

        AsignacionDocenteTemp::create([
            'docente' => 'Marcelino Torres Villanueva',
            'dni' => '34567890',
            'departamento' => 'Departamento de Ingeniería de Sistemas',
            'estadoId' => 2, // Estado "Incompleto"
        ]);

        AsignacionDocenteTemp::create([
            'docente' => 'César Arellano Salazar',
            'dni' => '45678901',
            'departamento' => 'Departamento de Ingeniería de Sistemas',
            'estadoId' => 2, // Estado "Incompleto"
        ]);

        AsignacionDocenteTemp::create([
            'docente' => 'Zoraida Yanet Vidal Melgarejo',
            'dni' => '56789012',
            'departamento' => 'Departamento de Ingeniería de Sistemas',
            'estadoId' => 2, // Estado "Incompleto"
        ]);

        AsignacionDocenteTemp::create([
            'docente' => 'Alberto Carlos Mendoza de los Santos',
            'dni' => '67890123',
            'departamento' => 'Departamento de Ingeniería de Sistemas',
            'estadoId' => 2, // Estado "Incompleto"
        ]);
    }
}
