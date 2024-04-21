<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Cursos</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de Cursos</h1>
      <a href="{{route('cursos.create')}} " class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($cursos as $curso)
                <tr>
                    <th scope="row">{{ $curso->id }}</th>
                    <td>{{ $curso->titulo }}</td>
                    <td>{{ $curso->descripcion }}</td>
                    <td>{{ $curso->duracion }}</td>
                    <td>{{ $curso->precio }}</td>
                    <td>{{ $curso->categoria }}</td>
                    <td>
                    <a href="{{route('cursos.edit', ['curso'=> $curso->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('cursos.destroy' , ['curso' => $curso->id])}}"
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