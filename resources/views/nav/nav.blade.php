<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>@yield('titulo')</title>
</head>
<style>
     body {
        background-color: #25274D;
      }
    </style>
<body>
 
  <div class="card mb-3">
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title"> <p class="font-weight-bold">SOFTPatagonia</p></h5>
    <p class="card-text"> </p>
   
  </div>
  <img class="card-img-bottom" src="..." alt="Card image cap">
</div>
    <nav class="navbar nav-tabs navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">7Scan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contratos')}}">Listado de Documentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contratos.crearcontrato')}}">Cargar Documento</a>
              </li>
            </ul>
            <a href={{route('auth.logout')}}>
            <button class="btn btn-secondary btn-lg" type="button">Salir</button>
            </a>
          </div>
        </div>
      </nav>
      <div class="container" style="margin-top:10px">
    @yield('content')
    </div>
    @yield('javascript')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
