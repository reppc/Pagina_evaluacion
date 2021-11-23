<?php
echo"

<nav
class='navbar navbar-expand-lg'
style='background-color: #3f2d3b; color: white'
>
<div class='container-fluid'>
  <a class='navbar-brand' href='#' style='align-self: center;'>
    <img
      src='img/logo.jpeg'
      alt=''
      width='200pt'
      height='100pt'
      class='d-inline-block align-text-top'
    />
    
  </a>
  <a class='navbar-brand' style='font-size: 40pt'>CEFAL</a>
  <button
    class='navbar-toggler'
    type='button'
    data-bs-toggle='collapse'
    data-bs-target='#navbarTogglerDemo01'
    aria-controls='navbarTogglerDemo01'
    aria-expanded='false'
    aria-label='Toggle navigation'
  >
    <span
      class='navbar-toggler-icon'
      style='font-size: 20px; color: white'
      ><p>+</p></span
    >
  </button>
  <div class='collapse navbar-collapse' id='navbarTogglerDemo01'>
    <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
      <li class='nav-item'>
        <a class='tipoL' href=''
          ><img
            src='img/inicio2.png'
            style='width: 15pt;'
          />&nbsp;Inicio&nbsp;</a
        >
      </li>
      <li>
        <div class='dropdown'>
          <button
            class='acomodo dropdown-toggle tipoL'
            style='margin: 0px;'
            type='button'
            id='dropdownMenuButton1'
            data-bs-toggle='dropdown'
            aria-expanded='false'
          >
            <img src='img/sis.png' style='width: 15pt;'/>&nbsp;Plan De Estudios
          </button>
          <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
            <li><a class='dropdown-item' href='secundaria.html'>Secundaria</a></li>
            <li><a class='dropdown-item' href='preparatoria.html'>Preparatoria</a></li><br>
            <li><p class='dropdown-item ofer' style='font-weight: bold;
'>OFERTA EDUCATIVA</p></li> 
            <li>
              <a class='dropdown-item' href='#'>Diplomado en administracion de empresas</a
              >
            </li>
            <li><a class='dropdown-item' href='diplomadoecxel.html'>Diplomado de excel</a></li>
            <li><a class='dropdown-item' href='Diplomadosistemas.html'>Diplomado en sistema</a></li>
            <li><a class='dropdown-item' href='#'>Diplomado en ingles</a></li>
            <li><a class='dropdown-item' href='diplomado_administracion.html'>Diplomado en administracion</a></li>
          </ul>
        </div>
      </li>
      
      <li class='nav-item'>
        <a class='tipoL' href='' style='margin-left: 5px'
          ><img src='img/becas.png' style='width: 30pt'/>Becas&nbsp;</a
        >
      </li>
      <li class='nav-item'>
        <a class='tipoL' href='servicio_social.html' style='margin-left: 5px'
          ><img src='img/serv.png' style='width: 18pt' />&nbsp;Practicas&nbsp;</a
        >
      </li>
      <li class='nav-item'>
        <a class='tipoL' href='' style='margin-left: 5px'
          ><img src='img/conv.png' style='width: 15pt' />Convocatorias</a
        >
      </li>
      <li class='nav-item' style='margin-left: 5px'>
        <a
          href=''
          class='btn btn primary border reg b1'
          style='color: lightgray; width: 100px'
          id='reg'
          >Registrate</a
        >
      </li>
    </ul>
  </div>
</div>
</nav>
<div class='nombre tipo2' style='border-radius: 0px 0px 55px 0px; width: 350px;'>
<p>&nbsp;&nbsp;Centro de Sistemas y Capacitacion &nbsp;&nbsp;Empresarial</p>
</div>
";
?>