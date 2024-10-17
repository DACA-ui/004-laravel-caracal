<!-- resources/views/asignacion_docente/detalle.blade.php -->
@extends('layouts.basic')

@section('title', 'Detalle del Docente')

@section('content')
<div class="container mt-5">

    <!-- Título de la página -->
    <h1 class="mb-4">Declaraciones del Docente</h1>

    <!-- Datos del docente -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Información del Docente</h5>
            <p><strong>Nombre:</strong> {{ $docente->docente }}</p>
            <p><strong>DNI:</strong> {{ $docente->dni }}</p>
            <p><strong>Departamento:</strong> {{ $docente->departamento }}</p>
            <p><strong>Estado:</strong>
                @if ($docente->estadoDeclaracionDocente->descripcion === 'Completo')
                    <span class="badge bg-success">COMPLETO</span>
                @else
                    <span class="badge bg-danger">INCOMPLETO</span>
                @endif
            </p>
        </div>
    </div>

    <!-- Tabla con declaraciones y códigos -->
    <table class="table table-striped table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Declaración</th>
                <th>Código</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Primer registro -->
            <tr>
                <td>Declaración de carga académica docente</td>
                <td>F01-CAD</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm">Ver</a>
                </td>
            </tr>
            <!-- Segundo registro -->
            <tr>
                <td>Declaración jurada de no estar incurso en causales de incompatibilidad o impedimento laboral</td>
                <td>F02-CAD</td>
                <td>
                <a href="{{ route('generarPDF', $docente->id) }}" class="btn btn-primary btn-sm">Ver</a>
                </td>
            </tr>
            <!-- Tercer registro -->
            <tr>
                <td>Horario semanal de la carga académica docente</td>
                <td>F03-CAD</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm">Ver</a>
                </td>
            </tr>
        </tbody>
    </table>

</div>
@endsection
