<?php
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {

Route::get('/curso', [CursoController:: class, 'index'])->name('cursos.index');
Route::post('/curso', [CursoController::class, 'store'])->name('cursos.store');
Route::get('/curso/create', [CursoController::class, 'create'])->name('cursos.create');
Route::delete('/curso/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
Route::put('/curso/{curso}', [CursoController::class, 'update'])->name('cursos.update');
Route::get('/curso/{curso}/edit', [CursoController::class , 'edit'])->name('cursos.edit');
Route::get('/instructores', [InstructorController:: class, 'index'])->name('instructor.index');
Route::post('/instructores', [instructorController::class, 'store'])->name('instructor.store');
Route::get('/instructores/create', [instructorController::class, 'create'])->name('instructor.create');
Route::delete('/instructores/{instructor}', [instructorController::class, 'destroy'])->name('instructor.destroy');
Route::put('/instructores/{instructor}', [instructorController::class, 'update'])->name('instructor.update');
Route::get('/instructores/{instructor}/edit', [instructorController::class , 'edit'])->name('instructor.edit');
Route::get('/estudiantes', [EstudianteController:: class, 'index'])->name('estudiantes.index');
Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');
Route::get('/estudiantes/create', [EstudianteController::class, 'create'])->name('estudiantes.create');
Route::delete('/estudiantes/{estudiante}', [estudianteController::class, 'destroy'])->name('estudiantes.destroy');
Route::put('/estudiantes/{estudiante}', [estudianteController::class, 'update'])->name('estudiantes.update');
Route::get('/estudiantes/{estudiante}/edit', [estudianteController::class , 'edit'])->name('estudiantes.edit');

Route::get('/inscripciones', [InscripcionController:: class, 'index'])->name('inscripciones.index');
Route::post('/inscripciones', [InscripcionController::class, 'store'])->name('inscripciones.store');
Route::get('/inscripciones/create', [InscripcionController::class, 'create'])->name('inscripciones.create');
Route::delete('/inscripciones/{inscripcion}', [InscripcionController::class, 'destroy'])->name('inscripciones.destroy');
Route::put('/inscripciones/{inscripcion}', [InscripcionController::class, 'update'])->name('inscripciones.update');
Route::get('/inscripciones/{inscripcion}/edit', [InscripcionController::class , 'edit'])->name('inscripciones.edit');
});
