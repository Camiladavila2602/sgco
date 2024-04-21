<?php

use App\Http\Controllers\CursoController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso', [CursoController:: class, 'index'])->name('cursos.index');
Route::post('/curso', [CursoController::class, 'store'])->name('cursos.store');
Route::get('/curso/create', [CursoController::class, 'create'])->name('cursos.create');
Route::delete('/curso/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
Route::put('/curso/{curso}', [CursoController::class, 'update'])->name('cursos.update');
Route::get('/curso/{curso}/edit', [CursoController::class , 'edit'])->name('cursos.edit');

