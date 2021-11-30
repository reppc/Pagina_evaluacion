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
    <title>secundaria</title>
  </head>
  <body>
  <div class="menu-btn">
      <i class="fas fa-bars fa-2x"></i>
    </div>
      <!--nav bar-->
      <div class="container">
      

      <?php
        require_once("../items/navbar.php");
    ?>

      <!--fin-->
     
      <div class="nombre" style="border-radius: 0px 0px 55px 0px; width: 350px">
        <p>Centro de Sistemas y Capacitacion Empresarial</p>
      </div>
      <!-- #endregion -->
      <!--contenido-->
     
        <div>
          <h2>Secundaria</h2><br>
        </div>
        <div>
          <p>
            La Educación Secundaria constituye el último nivel de la Educación
            Básica, en él los estudiantes consolidan el perfil de egreso para
            contribuir con el desarrollo de las competencias para la vida que
            desde la Educación Preescolar han trabajado. Durante la Educación
            Secundaria los estudiantes requieren mayor comprensión, asesoría y
            apoyo tutorial, pues enfrentan diferentes situaciones en su tránsito
            por el nivel educativo: desde los cambios físicos y psicológicos,
            hasta la organización misma de sus estudios, en los que cada
            asignatura es impartida por un docente especializado. Estos aspectos
            y el incremento de la presión social que se traduce en el tránsito a
            la vida adulta, hacen que los tres años de educación secundaria
            requieran de apoyos diferenciados a las necesidades de los
            estudiantes. </p>
            <br>
            <p>
            Este espacio busca brindar información a los asesores
            técnico pedagógicos, supervisores, directores, jefes de enseñanza,
            docentes y padres de familia, para favorecer el aprendizaje de los
            estudiantes bajo una mirada integral. Los invitamos a compartir
            experiencias docentes, directivas o de asesoría técnico pedagógica
            relacionadas con la implementación de los programas de estudio.
          </p>
        </div>
      
      <!--fin-->
     
    </div> <?php
			require_once("../items/footer.php");
		?>

    <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
  </body>
</html>
