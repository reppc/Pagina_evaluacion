<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="style.css">
    <title>Diplomados en Administración de Empresas</title>
  </head>
  <body>
  <div class="menu-btn">
      <i class="fas fa-bars fa-2x"></i>
    </div>
      
      <div class="container">
      <!--nav bar-->

      <?php
        require_once("../items/navbar.php");
    ?>

      <!--fin-->
      
      
      <div class="nombre" style="border-radius: 0px 0px 55px 0px; width: 350px">
        <p>Centro de Sistemas y Capacitacion Empresarial</p>
      </div>
     
      <!--contenido-->
      
        <div>
          <h2>Diplomados en Administración de Empresas</h2>
        </div>
        
    <!--fin-->
        <div>
          <p>        
            En este diplomado se desarrollarán estrategias y procesos empresariales
            para mejorar la eficacia de las organizaciones en materia administrativa, 
            comercial y de gestión del talento.<br>
            El egresado del Diplomado en Administración de Empresas será capaz de
            Implementar transformaciones organizacionales debido a su visión estratégica,
            Plantear soluciones para prevenir riesgos empresariales,
            Tomar decisiones para las distintas áreas organizacionales.
            </p>
            <br>
            <p>
            Nos enfocamos en profesionales que deseen comprender de manera amplia
             la administración de empresas y la elaboración de estrategias comerciales:<br>

            -Empresarios <br>
            -Gerentes<br>
            -Emprendedores<br>
           -Profesionales independientes<br>
            -Administradores de negocios   <br> 
                
                
          </p>
        </div>
      </div>
      <!--fin-->
      <?php
			require_once("../items/footer.php");
		?>
    </div>
    <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
  </body>
</html>