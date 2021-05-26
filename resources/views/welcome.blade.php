
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Ejercicio Landing Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .container {
    max-width: 960px;
  }
  
  /*
   * Custom translucent site header
   */
  
  .site-header {
    background-color: rgba(0, 0, 0, .85);
    -webkit-backdrop-filter: saturate(180%) blur(20px);
    backdrop-filter: saturate(180%) blur(20px);
  }
  .site-header a {
    color: #8e8e8e;
    transition: color .15s ease-in-out;
  }
  .site-header a:hover {
    color: #fff;
    text-decoration: none;
  }
  
  /*
   * Dummy devices (replace them with your own or something else entirely!)
   */
  
  .product-device {
    position: absolute;
    right: 10%;
    bottom: -30%;
    width: 300px;
    height: 540px;
    background-color: #333;
    border-radius: 21px;
    transform: rotate(30deg);
  }
  
  .product-device::before {
    position: absolute;
    top: 10%;
    right: 10px;
    bottom: 10%;
    left: 10px;
    content: "";
    background-color: rgba(255, 255, 255, .1);
    border-radius: 5px;
  }
  
  .product-device-2 {
    top: -25%;
    right: auto;
    bottom: 0;
    left: 5%;
    background-color: #e5e5e5;
  }
  
  
  /*
   * Extra utilities
   */
  
  .flex-equal > * {
    flex: 1;
  }
  @media (min-width: 768px) {
    .flex-md-equal > * {
      flex: 1;
    }
  }
    </style>

  </head>
  <body>
    
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2 d-none d-md-inline-block" href="#">Inicio</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Características</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Ingresa a la APP</a>
  </nav>
</header>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">7enscan</h1>
      <p class="lead fw-normal">La manera fácil y sencilla de digitalizar sus documentos y tenerlos disponibles en todo lugar</p>
      <a class="btn btn-outline-secondary" href="#">Próximamente</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Puedes almacenar tus contratos</h2>
        <p class="lead">Ya no necesitarás andar con una carpeta en tu bolso.</p>
        <div class="bg-light shadow-sm mx-auto" style="width: 50%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="/images/doc1.png" class="img-fluid" alt="Documentos" style="margin-top:15px">
        </div>
      </div>
      
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Seguridad</h2>
        <p class="lead">Tus documentos quedarán protegidos para que nadie más los vea.</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img src="/images/lock.png" class="img-fluid" alt="Protegido" style="width: 25%;margin-top:20px">
      </div>
    </div>
  </div>


<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <small class="d-block mb-3 text-muted">&copy; Unab–2021</small>
    </div>

    <div class="col-6 col-md">
      <h5>Recursos</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Manual de usuario</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Acerca de nosotros</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Equipo de trabajo</a></li>
        <li><a class="link-secondary" href="#">Terminos de uso</a></li>
      </ul>
    </div>
  </div>
</footer>


  </body>
</html>
