<?php
echo"

<nav
class='navbar navbar-expand-lg'
style='background-color: #3f2d3b; color: white'
>
<div class='container-fluid'>
  <a class='navbar-brand' href='#'>
    <img
      src='/docs/5.1/assets/brand/bootstrap-logo.svg'
      alt=''
      width='30'
      height='24'
      class='d-inline-block align-text-top'
    />
    CEFAL
  </a>
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
            style='width: 15pt'
          />&nbsp;Inicio</a
        >
      </li>
      <li>
        <div class='dropdown'>
          <button
            class='btn dropdown-toggle'
            style='margin: 0px; color: white'
            type='button'
            id='dropdownMenuButton1'
            data-bs-toggle='dropdown'
            aria-expanded='false'
          >
            <img src='img/sis.png' style='width: 15pt' />programas
          </button>
          <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
            <li><a class='dropdown-item' href='secundaria.html'>secundaria</a></li>
            <li><a class='dropdown-item' href='preparatoria.html'>preparatoria</a></li>
          </ul>
        </div>
      </li>
      <li>
        <div class='dropdown'>
          <button
            class='btn dropdown-toggle'
            style='margin: 0px; color: white'
            type='button'
            id='dropdownMenuButton1'
            data-bs-toggle='dropdown'
            aria-expanded='false'
          >
            <img src='img/becas.png' style='width: 30pt' />diplomados
          </button>
          <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
            <li>
              <a class='dropdown-item' href='#'>diplomados en administracion de empresas</a
              >
            </li>
            <li><a class='dropdown-item' href='diplomadoecxel.html'>diplomado de excel</a></li>
            <li><a class='dropdown-item' href='Diplomadosistemas.html'>diplomado en sistema</a></li>
            <li><a class='dropdown-item' href='#'>diplomado en ingles</a></li>
            <li><a class='dropdown-item' href='diplomado_administracion.html'>diplomado en administracion</a></li>
          </ul>
        </div>
      </li>
      <li class='nav-item'>
        <a class='tipoL' href='' style='margin-left: 5px'
          ><img src='img/becas.png' style='width: 30pt' />Becas</a
        >
      </li>
      <li class='nav-item'>
        <a class='tipoL' href='servicio_social.html' style='margin-left: 5px'
          ><img src='img/serv.png' style='width: 18pt' />Servicio
          social</a
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
          class='reg btn btn primary border'
          style='color: lightgray; width: 100px'
          id='reg'
          >Registrate</a
        >
      </li>
    </ul>
  </div>
</div>
</nav>
<div class='nombre' style='border-radius: 0px 0px 55px 0px; width: 350px'>
<p>Centro de Sistemas y Capacitacion Empresarial</p>
</div>
";
?>