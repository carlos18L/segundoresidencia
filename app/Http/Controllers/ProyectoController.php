<?php
namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Material;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
{
    $proyectos = Proyecto::paginate(10); // Paginar de 10 en 10
    return view('proyectos.index', compact('proyectos'));
}


    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        // Validar datos del proyecto
        $validated = $request->validate([
            'Codigo' => 'required|string|max:5',
            'Nombreproyecto' => 'required|string|max:200',
            'Fechainicio' => 'required|date',
            'Fechafinal' => 'required|date',
            'Municipiodelaobra' => 'required|string|max:105',
            'Localidad' => 'required|string|max:500',
            'NoOficio' => 'required|string|max:45',
            'Montototal' => 'required|integer',
            'Abono' => 'nullable|integer',
        ]);

        // Crear el proyecto
        $proyecto = Proyecto::create($validated);

        // Asociar automáticamente materiales con el mismo nombre de obra
        Material::where('obra', $proyecto->Nombreproyecto)->update(['estado' => 'asociado']);

        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado y materiales asociados.');
    }

    public function show(Proyecto $proyecto)
{
    $proyecto->load('materiales'); // Cargar los materiales asociados
    return view('proyectos.show', compact('proyecto'));
}


    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        // Validar datos
        $validated = $request->validate([
            'Codigo' => 'required|string|max:5',
            'Nombreproyecto' => 'required|string|max:200',
            'Fechainicio' => 'required|date',
            'Fechafinal' => 'required|date',
            'Municipiodelaobra' => 'required|string|max:105',
            'Localidad' => 'required|string|max:500',
            'NoOficio' => 'required|string|max:45',
            'Montototal' => 'required|integer',
            'Abono' => 'nullable|integer',
        ]);

        $proyecto->update($validated);

        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado correctamente.');
    }
}
