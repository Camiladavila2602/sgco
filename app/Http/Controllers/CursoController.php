<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', ['cursos' => $cursos]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->id = $request->id;
        $curso->titulo = $request->titulo;
        $curso->descripcion = $request->descripcion;
        $curso->duracion = $request->duracion;
        $curso->precio = $request->precio;
        $curso->categoria = $request->categoria;
        $curso->save();

        $cursos = Curso::all();
        return view('cursos.index', ['cursos' => $cursos]); 
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
        $curso = Curso::find($id);
        return view('cursos.edit', ['curso' => $curso]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $curso = Curso::find($id);
        $curso->titulo = $request->titulo;
        $curso->descripcion = $request->descripcion;
        $curso->duracion = $request->duracion;
        $curso->precio = $request->precio;
        $curso->categoria = $request->categoria;
        $curso->save();

        $cursos = Curso::all();
        return view('cursos.index', ['cursos' => $cursos]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        $cursos = Curso::all();
        return view('cursos.index', ['cursos' => $cursos]); 
    }
}
