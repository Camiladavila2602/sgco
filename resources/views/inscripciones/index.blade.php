<!doctype html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artistas') }}
        </h2>
    </x-slot>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Inscripciones</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de Inscripciones</h1>
      <a href="{{route('inscripciones.create')}}" class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Instructor</th>
                    <th scope="col">Estudiante</th>
                    <th scope="col">Fecha Inscripcion</th>
                    <th scope="col">Actions</th> 
                </tr>
            </thead>
            <tbody>
             @foreach ($inscripciones as $inscripcion)
                <tr>
                    <th scope="row">{{ $inscripcion->id }}</th>
                    <td>{{ $inscripcion->titulo }}</td>
                    <td>{{ $inscripcion->nombre_instructor }}</td>
                    <td>{{ $inscripcion->nombre_estudiante }}</td>
                    <td>{{ $inscripcion->fecha_inscripcion }}</td> 
                    <td> 
                    <a href="{{route('inscripciones.edit', ['inscripcion'=> $inscripcion->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('inscripciones.destroy' , ['inscripcion' => $inscripcion->id])}}"
                    method="POST" style="display: inline-block">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
    

    
   </body>

  
</html>
</x-app-layout>