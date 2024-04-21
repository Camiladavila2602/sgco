<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Instructores</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de Instructores</h1>
      <a href="{{route('instructor.create')}} " class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Biografia</th> 
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($instructores as $instructor)
                <tr>
                    <th scope="row">{{ $instructor->id }}</th>
                    <td>{{ $instructor->nombre }}</td>
                    <td>{{ $instructor->apellido }}</td>
                    <td>{{ $instructor->especialidad }}</td>
                    <td>{{ $instructor->biografia }}</td> 
                    <td>
                    <a href="{{route('instructor.edit', ['instructor'=> $instructor->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('instructor.destroy' , ['instructor' => $instructor->id])}}"
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