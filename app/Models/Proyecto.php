<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyectos'; // Nombre de la tabla
    protected $primaryKey = 'idProyectos'; // Llave primaria personalizada

    protected $fillable = [
        'Codigo', 'Nombreproyecto', 'Fechainicio', 'Fechafinal', 'Avance',
        'Municipiodelaobra', 'Localidad', 'NoOficio', 'Montototal', 'Abono',
    ];

    // Relación: un proyecto tiene muchos materiales
    public function materiales()
    {
        return $this->hasMany(Material::class, 'obra', 'Nombreproyecto');
    }
}
