<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>CEFAL</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="Bootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="Css/Inicio.css" />
    <link rel="stylesheet" type="text/css" href="Css/cartas_inicio.css" />
  </head>
  <body style="background-color: #22050a">
    <div style="margin-left: 10%; margin-right: 10%">
      <!--nav bar-->
			<?php
			require_once("items/navbar.php");
			?>
      <!--fin-->
      <!--heder-->
      <!--carrucel-->
      <div
        id="carouselExampleControls"
        style="width: 100%"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <!--items-->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              style="margin-left: 25%"
              src="items\recursos\FOTOS\WhatsApp Image 2021-11-14 at 9.08.46 PM.jpeg"
              class="d-block w-50"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              style="margin-left: 25%"
              src="items\recursos\FOTOS\WhatsApp Image 2021-11-14 at 9.08.46 PM.jpeg"
              class="d-block w-50"
              alt="..."
            />
          </div>
        </div>
        <!--fin-->
        <!--botones-->
        <button
          style=""
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <!--fin-->
      </div>
      <!--fin-->
      <!--fin-->
      <!--contenido-->
        <div class="container">
          <div class="card" style="width: 30%">
            <img src="img/img1.jpg" />
            <h4>secundaria</h4>
            <p>secundaria en 4 meses de la mano con INEA</p>
            <a href="#">Leer más</a>
          </div>

          <div class="card" style="width: 30%">
            <img src="img/img2.jpg" />
            <h4>preparatoria</h4>
            <p>la preparatoria cuenta con diplomado en Administracion</p>
            <a href="#">Leer más</a>
          </div>
        </div>
      <!--fin-->
      <!--aserca de nosotros-->
      <div style="color: white; width: 40%; margin-left: 30%">
        <h2 style="text-align: center">sobre nosotros</h2>
        <p>
          Planes de estudio para jóvenes y trabajadores en menos tiempo y nos
          adaptamos a tus horarios
        </p>
      </div>
      <!--fin-->
      <!--footer-->
		<?php
			require_once("items/footer.php");
		?>
      <!--fin-->
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
