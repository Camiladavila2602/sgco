<!doctype html>
<html lang="en">
  <head> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Exposiciones</title>
  </head>
  <body>
    <div class="container">
        <h1>Edit inscripcion</h1>
        <form method="POST" action="{{route('inscripciones.update' , ['inscripcion' => $inscripcion->id])}}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="code" disabled="disabled" value="{{$inscripcion->id}}">
                <div id="idHelp" class="form-text">inscripcion Id</div>
            </div>
            <div class="mb-3">
                <label for="artista">Obra:</label>
                <select class="form-select" name="curso" id="curso" required>
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($cursos as $curso)
                    @if($curso->id == $inscripcion->curso_id)
                        <option selected value="{{$curso->id}}">{{$curso->titulo}}</option>
                    @else
                        <option value="{{$curso->id}}">{{$curso->titulo}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="artista">Instructor:</label>
                <select class="form-select" name="instructor" id="instructor" required>
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($instructores as $instructor)
                    @if($instructor->id == $inscripcion->instructor_id)
                        <option selected value="{{$instructor->id}}">{{$instructor->nombre}}</option>
                    @else
                        <option value="{{$instructor->id}}">{{$instructor->nombre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="artista">Estudiante:</label>
                <select class="form-select" name="estudiante" id="estudiante" required>
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($estudiantes as $estudiante)
                    @if($estudiante->id == $inscripcion->estudiante_id)
                        <option selected value="{{$estudiante->id}}">{{$estudiante->nombre}}</option>
                    @else
                        <option value="{{$estudiante->id}}">{{$estudiante->nombre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha de Inscripcion</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required value="{{$inscripcion->fecha_inicio}}">
            </div>

            
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('inscripciones.index')}}" class="btn btn-warning">Cancel</a>
            </div>
            
        </form>
    </div>  
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

   
  </body>
</html>