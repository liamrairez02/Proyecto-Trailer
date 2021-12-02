<?php
include 'C:\xampp\htdocs\Proyecto_Movie\config\config.php';
?>

@extends('layout.layout')

@section('title', 'Proyecto Trailers')

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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="{{route('movies.index')}}">Proyecto Trailers</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('movies.index')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('movies.create')}}">Agregar</a>
        </li>
      </ul>
      <form class="d-flex" action="{{route('buscarpeli')}}" method="get">
        <input class="form-control me-2" type="text" name="busqueda" placeholder="Search" aria-label="Buscar">
        <input class="btn btn-outline-success" name="enviar" type="submit" value="Buscar" ></input>
      </form>
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

<center>
  
<br><br>
<img src="\img\cooltext399147978997229.png" width="700" height="100">
<br><br>

<?php
if(isset($_GET['enviar'])){
    $busqueda = $_GET['busqueda'];

    $consulta = $Con->query("SELECT * FROM movies WHERE titulo LIKE '%$busqueda%'");

    while($row = $consulta->fetch_array()){

        echo '<div class="card mb-2" style="max-width: 1050px; height: 500px;">';
        echo '<div class="row g-0 h-100  text-white bg-secondary mb-4 col-sm ">';
        echo '<div class="col-md-4">';
        echo '<div class="row g-0 h-100  mb-4 col-sm ">';
        echo '<img src="'.$row['imagen'].'" class="img-fluid rounded-start" alt="..." width="500" height="100"></div></div>';
        echo '<div class="col-md-8">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title"> '.$row['titulo'].' ('.$row['director'].') </h5>';
        echo '<p class="card-text"> '.$row['reseña'].' </p>';   
              echo  '</div>';
              echo '</div>';
              echo '</div>';

    }
}
?>
</center>
@endsection
