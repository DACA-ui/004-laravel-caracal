<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Models\AsignacionDocenteTemp;

class PDFController extends Controller
{
    public function generarPDF($id)
    {
        // Obtener los datos del docente
        $docente = AsignacionDocenteTemp::findOrFail($id);

        // Pasar los datos del docente a la vista de la plantilla
        $data = [
            'nombre' => $docente->docente,
            'dni' => $docente->dni,
            'departamento' => $docente->departamento,
        ];

        // Cargar la vista para generar el PDF
        $pdf = PDF::loadView('loadDeclaration.declaracion_jurada', $data);

        // Descargar el PDF
        return $pdf->download('DeclaracionJurada_' . $docente->dni . '.pdf');
    }
}
