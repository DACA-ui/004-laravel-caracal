<!-- resources/views/asignacion_docente/index.blade.php -->
@extends('layouts.basic')

@section('title', 'Asignación Docente')

@section('content')
<div class="container mt-5">

    <!-- Título de la página -->
    <h1 class="mb-4 text-center">CAD</h1>

    <!-- Tabla de asignación de docentes -->
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Docente</th>
                <th>Departamento</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asignaciones as $asignacion)
            <tr>
                <td>{{ $asignacion->docente }}</td>
                <td>{{ $asignacion->departamento }}</td>
                <td>
                    @if ($asignacion->estadoDeclaracionDocente->descripcion === 'Completo')
                        <span class="badge bg-success">COMPLETO</span>
                    @else
                        <span class="badge bg-danger">INCOMPLETO</span>
                    @endif
                </td>
                <td>
                    <!-- Opciones para ver detalles, editar, eliminar -->
                    <a href="{{ route('loadDeclaration.show', $asignacion->id) }}" class="btn btn-primary btn-sm">Detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection