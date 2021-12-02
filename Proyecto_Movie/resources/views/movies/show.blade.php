@extends('layout.layout')

@section('title', 'Vista Previa')


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


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.atomix.vg/wp-content/uploads/2021/06/New-Project-1.jpg" class="d-block w-100" alt="..." width="500" height="450">
    </div>
    <div class="carousel-item">
      <img src="https://preview.redd.it/6092ltrt8nt71.jpg?auto=webp&s=c26d698d5d92796be9c6ab47f22dba63a7be96c3" class="d-block w-100" alt="..." width="500" height="450">
    </div>
    <div class="carousel-item">
      <img src="https://wallpapercave.com/wp/wp8751913.jpg" class="d-block w-100" alt="..." width="500" height="450">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<br>
<br>



<div class="row">
<div class="card text-white bg-secondary mb-3 col-sm" style="width: 18rem;">
  <center><img src="{{$movie->imagen}}" class="card-img-top" alt="..." width="500" height="1000"></center>
  <div class="card-body">
    <h5 class="card-title">{{$movie->titulo}} ({{$movie->director}})</h5>
    <p class="card-text"><strong>Reseña:</strong><br>{{$movie->reseña}}</p>
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Genero: </strong>{{$movie->genero}}</li>
    <li class="list-group-item"><strong>Actores:</strong> {{$movie->actores}}</li>
    <li class="list-group-item"><strong>Año:</strong> {{$movie->año}}</li>
    <Center><li class="list-group-item"><iframe src="{{$movie->url_video}}" width="700" height="350" frameborder="0"></iframe></li></Center>
  </ul>
    <form action="{{route('movies.destroy',$movie->id)}}" method="post">
        <br><br>
        <center><a href="{{route('movies.index',$movie->id)}}" class="btn btn btn-primary">Volver</a></center>
        @csrf
    </form> 

  </div>
</div>
</div>

<br>

@endsection