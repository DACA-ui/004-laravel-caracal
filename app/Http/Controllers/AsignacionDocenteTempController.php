<?php

namespace App\Http\Controllers;

use App\Models\AsignacionDocenteTemp; // Importar el modelo correctamente
use Illuminate\Http\Request;

class AsignacionDocenteTempController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            // Aquí puedes manejar lógica como recuperar asignaciones de docentes
            $asignaciones = AsignacionDocenteTemp::all(); // Obtener todas las asignaciones (o ajusta según la lógica)

            // Devolver la vista loadDeclaration.index con los datos necesarios
            return view('loadDeclaration.index', compact('asignaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Buscar el docente por ID
        $docente = AsignacionDocenteTemp::findOrFail($id);

        // Retornar la vista con los datos del docente
        return view('loadDeclaration.detalle', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
