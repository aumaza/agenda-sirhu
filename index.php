<?php include "functions/functions.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Agenda Sirhu - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="icons/actions/bookmarks-organize.png" />
  <?php skeleton();?>
  
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  input { 
    text-align: center; 
  }
  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">SIRHU</a></li>
        <li><a href="#services">SERVICIOS</a></li>
        <li><a href="#pricing">AUTORIDADES</a></li>
        <li><a href="#contact">OLVIDE MI PASSWORD</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Agenda Sirhu</h1> 
  <p>Ingresá tus Datos</p>
  <div class="container">
  <div class="row">
  <div class="col-sm-12">

     <form action="formLogin.php" method="POST">
  <div class="form-group">
    <label for="usuario">Usuario:</label>
    <input type="text" class="form-control" id="usuario" name="user" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pass" required>
  </div>
   <button type="submit" class="btn btn-default">Ingresar</button>
</form> 
</div>
</div>
</div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Sobre el Sirhu</h2>
      <h4>SIRHU - Sistema Integrado de Recursos Humanos</h4><br>
      <p>La Dirección de Presupuesto y Gastos en Personal, lleva adelante el control y análisis de los gastos en materia de todo lo referente a gastos en personal de la Administración Central</p>
      </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICIOS</h2>
  <h4>Links de Interés</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-book logo-small"></span>
      <h4><a href="http://www.infoleg.gob.ar/" target="blank">Infoleg</a></h4>
      <p>Información Legislativa y Documental</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-envelope logo-small"></span>
      <h4><a href="http://correomecon.mecon.gob.ar/" target="blank">Correo Mecon</a></h4>
      <p>Correo del Ministerio de Economía de la Nación</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-folder-open logo-small"></span>
      <h4><a href="https://cas.gde.gob.ar/" target="blank">GDE</a></h4>
      <p>Gestión Documental Electrónica</p>
    </div>
  </div>
  <br><br>
 </div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Autoridades</h2>
    <h4>Autoridades de la Dirección de Presupuesto y Gastos en Personal</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel text-center">
        <div class="panel-heading">
          <h1>Jorge Caruso</h1>
        </div>
        <div class="panel-body">
          <p><strong>Abogado</strong></p>
        </div>
        <div class="panel-footer">
          <h3>Cargo</h3>
          <h4>Director</h4>
         </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel text-center">
        <div class="panel-heading">
          <h1>Carlos Enrique Traverso</h1>
        </div>
        <div class="panel-body">
          <p><strong>Ingeniero Industrial</strong></p>
        </div>
        <div class="panel-footer">
          <h3>Cargo</h3>
          <h4>Coordinador</h4>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel text-center">
        <div class="panel-heading">
          <h1><strong>Alejandro Ronald Krebs</strong></h1>
        </div>
        <div class="panel-body">
          <p><strong>Licenciado en Economía</strong></p>
        </div>
        <div class="panel-footer">
          <h3>Cargo</h3>
          <h4>Coordinador</h4>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">BLANQUEO DE PASSWORD</h2>
  <div class="row">
    <div class="col-sm-5">
      <h3>Formulario para Blanquear Password</h3>
      <p>Si olvidaste tu password</p>
      <p>Ingresá los datos que te solicitamos en el formulario</p>
      <p>Recordá cambiar tu Password nuevamente una vez que vuelvas a ingresar</p>
      <p>Muchas Gracias!</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
      <form action="update/update_pass.php" method="POST">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="usuario" placeholder="usuario_organismo" type="text" required>
        </div><br><br>
        <div class="row">
        <div class="col-sm-6 form-group">
          <button class="btn btn-default pull-right" type="submit">Actualizar</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Volver al Inicio</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
