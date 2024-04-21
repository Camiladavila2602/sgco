<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Estudiantes</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de Estudiantes</h1>
      <a href="{{route('estudiantes.create')}} " class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nivel Educativo</th> 
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($estudiantes as $estudiante)
                <tr>
                    <th scope="row">{{ $estudiante->id }}</th>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->apellido }}</td>
                    <td>{{ $estudiante->email }}</td>
                    <td>{{ $estudiante->nivel_educativo }}</td> 
                    <td>
                    <a href="{{route('estudiantes.edit', ['estudiante'=> $estudiante->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('estudiantes.destroy' , ['estudiante' => $estudiante->id])}}"
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