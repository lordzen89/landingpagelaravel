<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>7enScan</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <meta name="theme-color" content="#7952b3">


  <style>
    .imgLogo {
      width: 50%
    }

    body {
      background-color: #a4d0fb;
    }

    .card,
    .logoBtn {
      background-color: #e9f3fe;
    }

    .imgCarta {
      object-fit: cover;
    }

    /* .bntLogin {
      margin-left: 20px;
    } */

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 576px) {
      .imgLogo {
        width: 50%
      }
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;

      }

      .imgLogo {
        width: 40%
      }
    }

    @media (min-width: 992px) {
      .imgLogo {
        width: 30%
      }
    }

    @media (min-width: 1200px) {
      .imgLogo {
        width: 20%
      }
    }

    @media (min-width: 1400px) {}


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

    .flex-equal>* {
      flex: 1;
    }

    nav {
      background-color: #fff;
    }

    @media (min-width: 768px) {
      .flex-md-equal>* {
        flex: 1;
      }
    }
  </style>

</head>

<body>

  <header class="site-header sticky-top">
    <nav>
      <div class="row align-items-center logoBtn">
        <div class="col">
          <div class="d-flex align-content-center my-auto">

            <img src="/images/Logo_Marca_real.png" alt="" class="d-inline-block align-text-top imgLogo align-self-center">


          </div>
        </div>
        <div class="col">
          <div class="d-flex">
            <button type="button" class="btn btn-primary btn-success p-1 p-sm-2 p-md-3 m-2 btnLogin ms-auto"><strong>Ingresa aqui</strong></button>
          </div>
        </div>
      </div>


      <!-- </div> -->
    </nav>
  </header>

  <main>
    <!-- carrousel -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide d-none d-md-block" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="/images/logoarre.png" class="d-block w-50  mx-auto" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="/images/Digitalización.png" class="d-block w-50  mx-auto" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-white">A SOLO UN CLICK!</h5>
            <p class="text-white">Asi de facil sera acceder a tus documentos</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/images/Seguridad.png" class="d-block w-50  mx-auto" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-white">CON LA MAXIMA SEGURIDAD!</h5>
            <p class="text-white">Ofrecemos los mas altos estandares de seguridad para tus documentos</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- cards info -->
    <!-- <div class="container my-4">
      <div class="row d-flex ">
        <div class="col-6 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <img src="/images/imagen1.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <p class="card-text">
              <h4>Puedes almacenar tus contratos</h4>
              <hr>
              <p>Ya no necesitarás andar con una carpeta en tu bolso.</p>
              </p>
            </div>

          </div>
        </div>
        <div class="col-6 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">

            <div class="card-body">
              <p class="card-text">
              <h4>Seguridad</h4>
              <hr>
              <p>Tus documentos quedarán protegidos para que nadie más los vea.</p>
              </p>
            </div>
            <img src="/images/imagen2.jpg" class="card-img-top img-fluid" alt="...">
          </div>
        </div>
      </div>

    </div> -->
    <div class="container my-4">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 d-flex">
                <img src="/images/imagen1.jpg" alt="..." class="img-fluid imgCarta">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Puedes almacenar tus contratos</h5>
                  <p class="card-text">Ya no necesitarás andar con una carpeta en tu bolso.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 d-flex">
                <img src="/images/imagen2.jpg" alt="..." class="img-fluid imgCarta">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Seguridad</h5>
                  <p class="card-text">Tus documentos quedarán protegidos para que nadie más los vea.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SCRUM TEAM -->
    <div class="container">
      <h1 class="display-4 text-center mt-5">SCRUM TEAM</h1>
      <div class="row mb-5">
        <div class="card-group">
          <div class="card">
            <img src="/images/camilo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Scrum Master</h5>
              <p class="card-text">Camilo Valenzuela</p>

            </div>
          </div>
          <div class="card">
            <img src="/images/pablo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Owner</h5>
              <p class="card-text">Pablo Arce</p>

            </div>
          </div>
          <div class="card">
            <img src="/images/mariangel.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Desarrollo</h5>
              <p class="card-text">Mariangel Mujica</p>

            </div>
          </div>
          <div class="card">
            <img src="/images/julio.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Desarrollo</h5>
              <p class="card-text">Julio Vasquez</p>

            </div>
          </div>
          <div class="card">
            <img src="/images/tomas.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Desarrollo</h5>
              <p class="card-text">Tomas Edwards</p>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4">


        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            7enscan es una aplicación web que permite subir documentación relacionada con contratos de arriendos de
            viviendas y automóviles. Creado por alumnos de la UNAB para la empresa Patagonia Soft.
          </p>
        </section>
        <!-- Section: Text -->


      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="#">7enScan</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->


</body>

</html>