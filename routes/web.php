<?php

use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('materiales', MaterialController::class);


Route::post('/materiales/import', [MaterialController::class, 'import'])->name('materiales.import');
use App\Http\Controllers\ProyectoController;

Route::resource('proyectos', ProyectoController::class);
