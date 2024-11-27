<form action="{{ route('proyectos.store') }}" method="POST">
    @csrf
    <input type="text" name="Codigo" placeholder="Código" required>
    <input type="text" name="Nombreproyecto" placeholder="Nombre del proyecto" required>
    <input type="date" name="Fechainicio" required>
    <input type="date" name="Fechafinal" required>
    <input type="text" name="Municipiodelaobra" placeholder="Municipio" required>
    <input type="text" name="Localidad" placeholder="Localidad" required>
    <input type="text" name="NoOficio" placeholder="No. Oficio" required>
    <input type="number" name="Montototal" placeholder="Monto Total" required>
    <input type="number" name="Abono" placeholder="Abono">
    <button type="submit">Crear Proyecto</button>
</form>
