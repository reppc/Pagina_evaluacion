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
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="style.css">
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
<body>
<div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>
    <div class="container">
     <!--nav bar-->
			<?php
			require_once("../items/navbar.php");
			?>
            
            <section class="cards-banner-one">
              <div class="content">
                
              </div>
            </section>
                
                      <h1 class="h1" style="color: white;">Admisiones</h1> <br> 
                  
                
            
            <a href="" class="btn btn-primary azulito">Ficha de ingreso a CEFAL</a> <br>
            <a href="" class="btn btn-primary azulito">Proceso de inscripcion</a> <br>
            <a href="" class="btn btn-primary azulito">Cuotas</a> <br> 
            <a href="" class="btn btn-primary azulito">Calendario</a> <br>
            <a href="" class="btn btn-primary azulito">Resultados de inscripciones</a>


    </div>
<?php
			require_once("../items/footer.php");
		?>
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
</body>
</html>