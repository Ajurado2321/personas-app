<?php

use App\Http\Controllers\ComunaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\DepartamentoController;
use App\Models\Departamento;
use App\Models\Municipio;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');


Route::get('/municipios', [MunicipioController::class, 'index'])->name('municipios.index');
Route::post('/municipios', [MunicipioController::class, 'store'])->name('municipios.store');
Route::get('/municipios/create', [MunicipioController::class, 'create'])->name('municipios.create');
Route::put('/municipios/{municipio}', [MunicipioController::class, 'update'])->name('municipios.update');
Route::get('/municipios/{municipio}/edit', [MunicipioController::class, 'edit'])->name('municipios.edit');
Route::delete('/municipios/{municipio}', [MunicipioController::class, 'destroy'])->name('municipios.destroy');


Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
Route::put('/departammentos/{departamento}', [DepartamentoController::class, 'update'])->name('departamentos.update');
Route::get('/departamentos/{departamento}/edit', [DepartamentoController::class, 'edit'])->name('departamentos.edit');
Route::delete('/departamentos/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');
