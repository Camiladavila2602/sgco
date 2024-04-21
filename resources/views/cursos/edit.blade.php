<!doctype html>
<html lang="en">
  <head> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit curso</title>
  </head>
  <body>
    <div class="container">
        <h1>Edit curso</h1>
        <form method="POST" action="{{route('cursos.update' , ['curso' => $curso->id])}}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="code" disabled="disabled" value="{{$curso->id}}">
                <div id="idHelp" class="form-text">curso Id</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Titulo:</label>
                <input type="text" required class="form-control" id="titulo" aria-describedby="nameHelp" name="titulo" placeholder="titulo curso." value="{{$curso->titulo}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Descripcion:</label>
                <input type="text" required class="form-control" id="descripcion" aria-describedby="nameHelp" name="descripcion" placeholder="descripcion curso." value="{{$curso->descripcion}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Duracion:</label>
                <input type="text" required class="form-control" id="duracion" aria-describedby="nameHelp" name="duracion" placeholder="duracion curso." value="{{$curso->duracion}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Precio:</label>
                <input type="text" required class="form-control" id="precio" aria-describedby="nameHelp" name="precio" placeholder="precio curso." value="{{$curso->precio}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Categoria:</label>
                <input type="text" required class="form-control" id="categoria" aria-describedby="nameHelp" name="categoria" placeholder="Categoria curso." value="{{$curso->categoria}}">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('cursos.index')}}" class="btn btn-warning">Cancel</a>
            </div>
            
        </form>
    </div>  
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

   
  </body>
</html>