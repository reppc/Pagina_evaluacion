<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      type="text/css"
      href="Bootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="Css/Inicio.css" />
    <link rel="stylesheet" type="text/css" href="Css/cartas_inicio.css" />
    <link rel="stylesheet" type="text/css" href="Css/convocatorias.css">
    <title>CEFAL</title>
    <style>
      .img1{
        width: 60%;
        
       
      }
      .azulito{
        background: blue;
        border-color: black;
        align-self: left;
      }
      .azulito:hover{
        background: black;
      }
    </style>
</head >
<body style="background-color: #22050a">
    <div style="margin-left: 10%; margin-right: 10%">
     <!--nav bar-->
			<?php
			require_once("items/navbar.php");
			?>
            <div class="container">
                <div class="row">
                    <div class="offset 4 col 4 offset 4">
                      <figure > <img src="img/barra-anuncio.jpg" style="align-self: center;"  class="img1"></figure>
                    </div>
                </div>
                <div class="row">
                  <div class="col 3">
                      <h1 class="h1" style="color: white;">Admisiones</h1>
                  </div>
                </div>
                
            </div>
            <a href="" class="btn btn-primary azulito">Ficha de ingreso a CEFAL</a> <br>
            <a href="" class="btn btn-primary azulito">Proceso de inscripcion</a> <br>
            <a href="" class="btn btn-primary azulito">Cuotas</a> <br> 
            <a href="" class="btn btn-primary azulito">Calendario</a> <br>
            <a href="" class="btn btn-primary azulito">Resultados de inscripciones</a>



<?php
			require_once("items/footer.php");
		?>
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
</body>
</html>