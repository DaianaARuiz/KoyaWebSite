<?php
include_once 'functions.php';

if(isset($_GET['page'])){
  $page=$_GET['page'];
  redireccionarPagina($page);
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="KoyaWeb es un emprendimiento argentino que surge en base a la pasión por la tecnología y el desarrollo. Somos un grupo de trabajo joven conformado por programadores, realizamos paginas web desde 0 con HTML,CSS, Javascript,PHP y MySql.">
    <meta name="robots"  content="index,follow"/>
    <meta name="title" content="Koya Web | Desarrollo Web ">
    <meta name="keywords" content="pagina web,desarrollo web,desarrollo sitios web argentina,creacion pagina web,landing page, ecommerce,portfolio digital,desarrollo web argentina, programacion, web developers">
    <!-- Etiquetas link -->
    <link rel="stylesheet" href="css/estilos.css" />
    <link href= "https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="icon" href="img/iconTittle.svg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Koya Web | Desarrollo Web </title>
  </head>
  <body>
  <header id="header" class="header">
      <div class="contenedor">
        <div class="menu">
          <h2 class="logo">
            <span class="corchete"><</span>Koya Web<span class="corchete">></span>
          </h2>
          <label id="icon">
            <i class="fas fa-bars"></i>
          </label>
          <nav class="nav">
           <ul>
              <li>  <a href="./?page=inicio" title="Ir a Inicio"  class="hover-line">Inicio</a></li>
              <li>  <a href="./?page=servicios" title="Ir a Servicios" class="hover-line">Servicios</a></li>
              <li>  <a href="./?page=trabajos" title="Ir a Trabajos" class="hover-line">Trabajos</a></li>
              <li>  <a href="./?page=preguntas" title="Ir a Preguntas" class="hover-line">Preguntas frecuentes</a></li>
              <li>  <a href="./?page=contacto" title="Ir a Contacto" class="hover-line">Contacto</a></li>
            </ul> 
          </nav>
        </div>
      </div>
    </header>