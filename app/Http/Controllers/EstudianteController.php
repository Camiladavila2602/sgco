<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', ['estudiantes' => $estudiantes]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiantes.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->id = $request->id;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->nivel_educativo = $request->nivel_educativo;
        $estudiante->save();

        $estudiantes = Estudiante::all();
        return view('estudiantes.index', ['estudiantes' => $estudiantes]); 

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
        $estudiante = Estudiante::find($id);
        return view('estudiantes.edit', ['estudiante' => $estudiante]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->nivel_educativo = $request->nivel_educativo;
        $estudiante->save();

        $estudiantes = Estudiante::all();
        return view('estudiantes.index', ['estudiantes' => $estudiantes]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        $estudiantes = Estudiante::all();
        return view('estudiantes.index', ['estudiantes' => $estudiantes]); 
    }
}
