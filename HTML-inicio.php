<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Jeta de Agua</title>
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/font-awesome/css/fontawesome.min.css">
<script src="https://kit.fontawesome.com/ae476a70d2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
<!-- MENU DE NAVEGACION -->
      <nav class="navbar">
        <div class="brand-title">
          <a href="#"><img src="/img/Logo.png" alt="" class="logo"></a>
        </div>
        <a href="#" class="toggle-button">
          <i class="fa-solid fa-bars"></i>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#videos">Video</a></li>
            <li><a href="#">Foto</a></li>
            <li><a href="#contacto">Contacto </a></li>
            
          </ul>
        </div>
      </nav>
       
    </header>
    
 <!-- Slideshow container -->

<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
      <img src="/img/boda1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="/img/Claqueta.png" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="/img/preview.jpg" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="/img/piscina.png" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="/img/tenis.png" style="width:100%">
  </div>

  <div class="mySlides">
      <img src="/img/playa.png" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>



  <!-- COLUMNAS -->
<section class="Servicios">
  <div class="row">
    <div class="column">
      <i class="fa-solid fa-video"></i>
        <h1 class="column-title">Video</h1>
        <p class="column-text">Producimos videos de alta calidad para que su empresa y evento tengan el mejor recuerdo. Desde audio, iluminación y tomas áeras, todo al servicio del cliente</p>
        <li class="btn">
          <a href="#videos">Ver más</a>
        </li>
    </div>
    <div class="column">
      <i class="fa-solid fa-camera-retro"></i>
        <h1 class="column-title">Foto</h1>
        <p class="column-text">Hacemos fotografías de la máxima calidad para todo tipo de eventos</p>
        <li class="btn">
          <a href="#">Ver más</a>
        </li>
    </div>
    <div class="column">
      <i class="fa-solid fa-camera-retro"></i>
        <h1 class="column-title">Drone</h1>
        <p class="column-text">Contamos con pilotos de drone con experiencia en turismo y Real Estate. Contamos con drones tipo FPV para las mejores imágenes de aventura.</p>
        <li class="btn">
          <a href="#">Ver más</a>
        </li>
    </div>  
  </div>
    
</section>

<!-- Videos -->
<a name="videos" id="videos"></a> 
<section class="videogallery">
  <div class="container1">
      <h1>Videos</h1>
      <div class="video-container1">
          <div class="video"><video src="video1.mp4" muted poster="video1.png"></video>
              <img src="/img/boda1.jpg" alt="">
          </div>
           <div class="video"><video src="video2.mp4" muted poster="video2.png"></video></div>
          <div class="video"><video src="video3.mp4"  muted poster="video3.png"></video></div>
          <div class="video"><video src="video4.mp4"  muted poster="video4.png"></video></div>
          <div class="video"><video src="video5.mp4"  muted poster="video5.png"></video></div>
          <div class="video"><video src="video6.mp4"  muted poster="video6.png"></video></div>
      </div>
      <div class="popup-video">
          <span>&times;</span>
          <video src="/img/Video/Video 02.mp4" muted autoplay controls></video>
          </div>
  </div>
  </section>

<!-- SECCION Contacto -->
<a name="contacto" id="contacto"></a> 
<section class="contacto">
  <div class="contact-row">
<div class="contact-column left">
      <h3 class="form-sub">Hablemos</h3>
      <h2 class="form-titulo">Contactanos</h2>
      
    <form method="post" action="enviar2.php">           
        <label for="fname">Nombre Completo</label>
        <input type="text" name="nombre" id="fname" placeholder="Tu nombre">

        <label for="email">Correo</label>
        <input type="text" name="correo" id="email" required="required" placeholder="Tu correo electrónico">
        
        <label for="pnone">Teléfono</label>
        <input type="text" name="telefono" id="phone" placeholder="Teléfono">

        <label for="fname">Ciudad</label>
        <select id="city" name="ciudad" placeholder="City">
          <option value="San José">San José</option>
          <option value="Alajuela">Alajuela</option>
          <option value="Cartago">Heredia</option>
          <option value="Cartago">Cartago</option> 
          <option value="Cartago">Puntarenas</option> 
          <option value="Cartago">Guanacaste</option> 
          <option value="Cartago">Limón</option> 
        </select>  


        <label for="subject">Contanos tu proyecto</label>
        <textarea id="subject" name="subject" placeholder="Escribe algo.." style="height: 200px" ></textarea>
      
        <input type="submit" value="Submit">
      </form>
</div>

<div class="contact-column middle">
      <img src="img/playa1.jpg" alt="" class="1">
</div>

<div class="contact-column right">
      <div class="info-columna">
        <i class="fa-brands fa-whatsapp-square"></i>
        <h1>Teléfono</h1>
        <p>2276-5551</p></div>
      <div class="info-columna">
        <i class="fa-solid fa-envelope"></i>
        <h1>Email</h1>
        <p>info@jetadeagua.com</p></div>
      <div class="info-columna">
        <i class="fa-solid fa-location-dot"></i>
        <h1>Dirección</h1>
        <p>Tirrases, Curridabat. <br> San José. Costa Rica </p></div>
        
  </div>
  
  </div>

</section>
    
</section>

<script src="java/js-jetadeagua.js"></script>

</body>
</html>
