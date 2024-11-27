@extends('layouts.app')

@section('content')
    <h1>Detalle del Proyecto</h1>
    <p><strong>Código:</strong> {{ $proyecto->Codigo }}</p>
    <p><strong>Nombre del Proyecto:</strong> {{ $proyecto->Nombreproyecto }}</p>
    <p><strong>Fecha de Inicio:</strong> {{ $proyecto->Fechainicio }}</p>
    <p><strong>Fecha Final:</strong> {{ $proyecto->Fechafinal }}</p>

    <h2>Materiales Asociados</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Concepto</th>
                <th>Unidad</th>
                <th>Cantidad</th>
                <th>Obra</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyecto->materiales as $material)
                <tr>
                    <td>{{ $material->codigo }}</td>
                    <td>{{ $material->concepto }}</td>
                    <td>{{ $material->unidad }}</td>
                    <td>{{ $material->cantidad }}</td>
                    <td>{{ $material->obra }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
