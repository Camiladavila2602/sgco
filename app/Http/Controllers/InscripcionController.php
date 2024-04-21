<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = DB::table('inscripciones')
        ->join('cursos', 'cursos.id', '=', 'inscripciones.curso_id')
        ->join('instructores', 'instructores.id', '=', 'inscripciones.instructor_id')
        ->join('estudiantes', 'estudiantes.id', '=', 'inscripciones.estudiante_id')
        ->select('inscripciones.*', 'cursos.titulo', 'instructores.nombre as nombre_instructor', 'estudiantes.nombre as nombre_estudiante')
        ->get();
    
    return view('inscripciones.index', ['inscripciones' => $inscripciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = DB::table('cursos')
        ->orderBy('titulo')
        ->get();
        $instructores = DB::table('instructores')
        ->orderBy('nombre')
        ->get();
        $estudiantes = DB::table('estudiantes')
        ->orderBy('nombre')
        ->get();
        return view('inscripciones.new', ['cursos' => $cursos, 'instructores' => $instructores, 'estudiantes' => $estudiantes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inscripcion = new Inscripcion();
        $inscripcion->id = $request->id;
        $inscripcion->curso_id = $request->curso;
        $inscripcion->estudiante_id = $request->estudiante;
        $inscripcion->instructor_id = $request->instructor;
        $inscripcion->fecha_inscripcion = $request->fecha;
        $inscripcion->save();

        $inscripciones = DB::table('inscripciones')
        ->join('cursos', 'cursos.id', '=', 'inscripciones.curso_id')
        ->join('instructores', 'instructores.id', '=', 'inscripciones.instructor_id')
        ->join('estudiantes', 'estudiantes.id', '=', 'inscripciones.estudiante_id')
        ->select('inscripciones.*', 'cursos.titulo', 'instructores.nombre as nombre_instructor', 'estudiantes.nombre as nombre_estudiante')
        ->get();
    
    return view('inscripciones.index', ['inscripciones' => $inscripciones]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inscripcion = Inscripcion::find($id);
        $cursos = DB::table('cursos')
        ->orderBy('titulo')
        ->get();
        $instructores = DB::table('instructores')
        ->orderBy('nombre')
        ->get();
        $estudiantes = DB::table('estudiantes')
        ->orderBy('nombre')
        ->get();
        return view('inscripciones.edit', ['inscripcion'=> $inscripcion,'cursos' => $cursos, 'instructores' => $instructores, 'estudiantes' => $estudiantes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inscripcion = Inscripcion::find($id); 
        $inscripcion->curso_id = $request->curso;
        $inscripcion->estudiante_id = $request->estudiante;
        $inscripcion->instructor_id = $request->instructor;
        $inscripcion->fecha_inscripcion = $request->fecha;
        $inscripcion->save();
        $inscripciones = DB::table('inscripciones')
        ->join('cursos', 'cursos.id', '=', 'inscripciones.curso_id')
        ->join('instructores', 'instructores.id', '=', 'inscripciones.instructor_id')
        ->join('estudiantes', 'estudiantes.id', '=', 'inscripciones.estudiante_id')
        ->select('inscripciones.*', 'cursos.titulo', 'instructores.nombre as nombre_instructor', 'estudiantes.nombre as nombre_estudiante')
        ->get();
    
    return view('inscripciones.index', ['inscripciones' => $inscripciones]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->delete();

        $inscripciones = DB::table('inscripciones')
        ->join('cursos', 'cursos.id', '=', 'inscripciones.curso_id')
        ->join('instructores', 'instructores.id', '=', 'inscripciones.instructor_id')
        ->join('estudiantes', 'estudiantes.id', '=', 'inscripciones.estudiante_id')
        ->select('inscripciones.*', 'cursos.titulo', 'instructores.nombre as nombre_instructor', 'estudiantes.nombre as nombre_estudiante')
        ->get();
    
    return view('inscripciones.index', ['inscripciones' => $inscripciones]);

    }
}
