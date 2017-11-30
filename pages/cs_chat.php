<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">	
	<!-- Corazón de Sandía CSS -->
	<link rel="stylesheet" type="text/css" href="../css/cs_styles.css">
  <link rel="stylesheet" type="text/css" href="../css/cs_c_styles.css">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Corazón de Sandía</title>	
  <!-- ICON -->
  <link rel="shortcut icon" type="image/x-icon" href="../img/cs.ico" />
  <!-- PHP -->
  <?php
  include('config.php');
  session_start();
  if(isset($_SESSION['uname'])) {}
    else{
      header('location:../index.html');
    }
    ?>
  <!-- SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../js/cs_chat_s.js"></script>
</head>
<body>
	<!-- Header -->
	<header>
    <div class="container">
      <!-- Logo & Menu -->
      <div class="row nav rounded-top align-items-stretch justify-content-between">
        <!-- Logo --> 
        <div class="col-md-12 col-lg logo d-flex align-items-center justify-content-center justify-content-lg-start">
          <img src="../img/logo.png" class="logo-img">          
          <p class="h2 t-logo">&nbsp Arreglos frutales • Arequipa</p>
          <!--<h2> <span class="p-corazon">CORAZÓN</span><span class="p-sandia"> DE SANDÍA</span></h2>-->
        </div>

        <!-- Subtitle
        <div class="w-100"></div>
        <div class="col-md-12 col-lg t-logo d-flex align-items-center justify-content-center justify-content-lg-start">          
          <p>Arreglos frutales • Arequipa</p>          
        </div> -->

        <!-- NAV INFO-->
        <nav class="col-md-12 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap">
          <a href="contact.html" class="c-1 d-flex align-items-center">
            <div class="d-flex flex-column text-center">
              <span class="h-pub">Disponibles las</span>
              <span class="h-pub">24 horas!</span>
            </div>
          </a>
          <a href="contact.html" class="c-2 d-flex align-items-center">
            <div class="d-flex flex-column text-center">
              <span class="h-pub">Hacemos</span>
              <span class="h-pub">Delivery!</span>              
            </div>
          </a>
          <a href="contact.html" class="c-3 d-flex align-items-center">
            <div class="d-flex flex-column text-center">
              <span class="h-pub">Pedidos</span>
              <span class="h-pub"><span><img src="../img/whatsapp-logo.png" class="icono"></span>+51 974 309 829</span>
              <span class="h-pub"><span><img src="../img/whatsapp-logo.png" class="icono">+51 989 408 757</span>
            </div>
          </a>
        </nav>        
      </div>
    </div>    
  </header>
		
	<!-- NAVBAR -->
	<section class="container">	
		<nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3 ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">¿Quiénes somos?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.html">Arreglos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="personal.html">Personaliza tu arreglo!</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="faq.html">Preguntas FaQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ichat.html">Chat</a>
              </li>
            </ul>
          </div>
        </nav>
	</section>


  <!-- INSERT CODE HERE-->

  <div class="container">
    <div class="row justify-content-end">
      <div class="col-2">
          <a href="logout.php" style="text-decoration:none"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>        
      </div>
    </div>

    <div class="w-100"></div>

    <div class="row justify-content-around">
      <div class="col-10">
        
          <div id="session-name">
            User: <input type="text" value="<?= $_SESSION['uname'] ?>" class="session-text" disabled>
          </div>
        
          <div id="result-wrapper">
            <div id="result">
              <?php
              include("load.php");
              ?>
            </div>      
          </div>
        
          <form method='post' action="#" onsubmit="return post();" id="my_form" name="my_form" class="f-form">            
                <input type="text" style="display:none" id="username" value="<?= $_SESSION['uname'] ?>">
                <div class="form-group row">
                  <div class="col-8 col-md-8">
                    <textarea id="comment"></textarea>              
                  </div>
                  <div class="col-4 col-md-4">
                    <input type="submit" value="Send" id="btn" name="btn" class="bb-button" />              
                  </div>
                </div>
          </form>    
      </div>
    </div>
    
  </div>

  <!-- INSERT CODE HERE-->

	<!-- FOOTER -->
	<footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="about.html">Sobre nosotros</a></li>
                <li><a href="contact.html">Contáctanos</a></li>                
            </ul>
        <p class="footer-copyright">© 2017 • Corazón de Sandía • Arreglos frutales • Arequipa</p>        		
        </div>
        <div class="footer-social">
            <a href="https://www.facebook.com/corazondesandiaarreglosfrutales/" class="social-icons" target="blanck"><span><img src="../img/facebook.png" class="i-loc"></span><span></a>            
        </div>
    </footer>

	<!-- jQuery Bootstrap-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>	
</body>
</html>