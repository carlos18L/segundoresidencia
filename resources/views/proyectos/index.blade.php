<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proyectos</title>
</head>
<body>
    <h1>Proyectos</h1>
    <a href="{{ route('proyectos.create') }}">Crear Nuevo Proyecto</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nombre del Proyecto</th>
                <th>Fecha Inicio</th>
                <th>Fecha Final</th>
                <th>Avance</th>
                <th>Municipio</th>
                <th>Localidad</th>
                <th>Oficio</th>
                <th>Monto Total</th>
                <th>Abono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->idProyectos }}</td>
                    <td>{{ $proyecto->Codigo }}</td>
                    <td>{{ $proyecto->Nombreproyecto }}</td>
                    <td>{{ $proyecto->Fechainicio }}</td>
                    <td>{{ $proyecto->Fechafinal }}</td>
                    <td>{{ $proyecto->Avance }}%</td>
                    <td>{{ $proyecto->Municipiodelaobra }}</td>
                    <td>{{ $proyecto->Localidad }}</td>
                    <td>{{ $proyecto->NoOficio }}</td>
                    <td>{{ $proyecto->Montototal }}</td>
                    <td>{{ $proyecto->Abono }}</td>
                    <td>
                        <a href="{{ route('proyectos.show', $proyecto) }}">Ver</a>
                        <a href="{{ route('proyectos.edit', $proyecto) }}">Editar</a>
                        <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Está seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Paginación --}}
    {{ $proyectos->links() }}
</body>
</html>
