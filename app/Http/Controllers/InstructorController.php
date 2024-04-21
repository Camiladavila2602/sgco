<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructores = Instructor::all();
        return view('instructores.index', ['instructores' => $instructores]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instructores.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $instructor = new Instructor();
        $instructor->id = $request->id;
        $instructor->nombre = $request->nombre;
        $instructor->apellido = $request->apellido;
        $instructor->especialidad = $request->especialidad;
        $instructor->biografia = $request->biografia;
        $instructor->save();

        $instructores = Instructor::all();
        return view('instructores.index', ['instructores' => $instructores]); 
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
        $instructor = Instructor::find($id);
        return view('instructores.edit', ['instructor' => $instructor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $instructor = Instructor::find($id);
        $instructor->nombre = $request->nombre;
        $instructor->apellido = $request->apellido;
        $instructor->especialidad = $request->especialidad;
        $instructor->biografia = $request->biografia;
        $instructor->save();

        $instructores = Instructor::all();
        return view('instructores.index', ['instructores' => $instructores]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instructor = Instructor::find($id);
        $instructor->delete();

        $instructores = Instructor::all();
        return view('instructores.index', ['instructores' => $instructores]); 
    }
}
