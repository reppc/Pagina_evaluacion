<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="Css/Inicio.css">
    <link rel="stylesheet" type="text/css" href="Css/pruebas.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pruebas</title>
</head>
<body>
<!--nav bar-->
  <nav class="navbar navbar-expand-lg" style="background-color: #3F2D3B; color:white;">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        CEFAL
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="font-size:20px;color:white;"><p>+</p></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="tipoL" href=''><img src='img/inicio2.png' style='width: 15pt;'>&nbsp;Inicio</a>
          </li>
          <li class="nav-item">
          <a class="tipoL" href='' style="margin-left:5px;"><img src='img/sis.png'style='width: 15pt;'>Sistemas</a>
          </li>
          <li class="nav-item">
          <a class="tipoL" href='' style="margin-left:5px;"><img src='img/egre.png'style='width: 18pt;'>Administracion</a>
          </li>
          <li class="nav-item">
          <a class="tipoL" href='' style="margin-left:5px;"><img src='img/becas.png'style='width: 30pt;'>Becas</a>
          </li>
          <li class="nav-item">
          <a class="tipoL" href='' style="margin-left:5px;"><img src='img/serv.png'style='width: 18pt;'>Servicio social</a>
          </li>
          <li class="nav-item">
          <a class="tipoL" href='' style="margin-left:5px;"><img src='img/conv.png'style='width: 15pt;'>Convocatorias</a>
          </li>
          <li class="nav-item" style="margin-left:5px;">
          <a href='' class='reg btn btn primary border' style='color:lightgray; width: 100px;' id='reg'>Registrate</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--fin-->
<!--carrucel-->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/becas.jpg" class="d-block w-50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/becas.jpg" class="d-block w-50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/becas.jpg" class="d-block w-50" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!--fin-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>