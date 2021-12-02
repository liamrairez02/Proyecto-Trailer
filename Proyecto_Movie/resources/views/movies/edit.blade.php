@extends('layout.layout')

@section('title', 'Editar Pelicula')


@section('content')

<style>
    body {
  height: 800px;
  background-image: url("https://image.freepik.com/foto-gratis/interior-sala-grunge-3d-foco-fondo-ambiente-ahumado_1048-11333.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
}

strong{
  color: yellow;
}

</style>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('movies.index')}}">Proyecto Trailers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('movies.index')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('movies.create')}}">Agregar</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<br>

<center><img src="\img\cooltext399147758568050.png" width="700" height="100"></center>

<br>
<br>

<div class="jumbotrol">
<form method="post" action="{{route('movies.update',$movie->id)}}"> 
    
<!-- Metodo que protege la informacion (proteccion de manipulacion de datos) -->
@csrf 

<!-- Metodo que actualiza los datos del formulario -->
@method('PUT')

<div>
    <label for=""><strong>Titulo de la Pelicula:</strong></label>
    <input class="form-control" type="text" value="{{$movie->titulo}}" name="titulo" id="" required maxlength="100">
</div>
<div>
    <label for=""><strong>Reseña:</strong></label>
    <textarea class="form-control" type="text" name="reseña" id="" cols="30" rows="10" required>{{$movie->reseña}}</textarea>
</div>
<div>
    <label for=""><strong>Genero:</strong></label>
    <select class="form-control" name="genero" id="" required>
    <option value="{{$movie->genero}}">{{$movie->genero}}</option>
    <option value="Acción">Acción</option>
    <option value="Aventuras">Aventuras</option>
    <option value="Ciencia Ficción">Ciencia Ficción</option>
    <option value="Comedia">Comedia</option>
    <option value="Drama">Drama</option>
    <option value="Fantasía">Fantasía</option>
    <option value="Musical">Musical</option>  
    <option value="Suspenso">Suspenso</option>  
    <option value="Terror">Terror</option>  
    </select>
</div>
<div>
    <label for=""><strong>Director:</strong></label>
    <input class="form-control" type="text" value="{{$movie->director}}" name="director" id="" maxlength="50">
</div>
<div>
    <label for=""><strong>Actores:</strong></label>
    <input class="form-control" type="text" value="{{$movie->actores}}" name="actores" id="">
</div>
<div>
    <label for=""><strong>Año:</strong></label>
    <input class="form-control" type="text" value="{{$movie->año}}" name="año" id="" required maxlength="50">
</div>
<div>
    <label for=""><strong>URl del Trailer:</strong></label>
    <input class="form-control" type="text" value="{{$movie->url_video}}" name="url_video" id="" placeholder="Ejemplo: https://www.youtube.com/embed/eOrNdBpGMv8">
</div>
<div>
    <label for=""><strong>Imagen:</strong></label>
    <input class="form-control" type="text" value="{{$movie->imagen}}" name="imagen" id=""  placeholder="Ejemplo: https://imagenesWeb/avengers-endgame.jpg">
</div>

<br>
<br>

<center><input class="btn btn-primary" type="submit" value="Guardar"></center>
<br><br>
</form>
</div>

@endsection