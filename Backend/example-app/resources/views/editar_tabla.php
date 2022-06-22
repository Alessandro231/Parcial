<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Producto</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <form action="{{route('paises.update',$paises->id)}}" method= "POST">
        @method('PUT')
        @csrf
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input value="{{$paises->nombre}}" type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="capital" class="form-label">Capital</label>
    <input value="{{$paises->capital}}" type="text" class="form-control" name="capital" id="capital" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="idioma" class="form-label">Idioma</label>
    <input value="{{$paises->idioma}}" type="text" class="form-control" name="idioma" id="idioma" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="poblacion" class="form-label">Poblacion</label>
    <input value="{{$paises->poblacion}}" type="number" class="form-control" name="poblacion" id="poblacion" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Modificar</button>
</form>

  </body>
</html>