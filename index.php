<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UTVT-Universidad Tecnologica del Valle de Toluca</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="bootstrap/css/slidefolio.css" rel="stylesheet">
	<!-- Font Awesome -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
	  <img class="img-rounded" alt="Company Logo" src="./img/logo.jpg"/>
        <h2><em>Eduardo Sánchez Zarco</em></h2>
		 
			<br>
			<a href="#contact" class="btn btn-top">Iniciar sesión</a>
			<font color='red'>
<?php
error_reporting(0);
$msg=$_GET['msg'];
echo $msg;
?>
      </div>
    </div>
    <!-- /Header Area -->




    
    <!-- Contact -->
    <div id="contact">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Inicia Sesión</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form action="valida.php" method="POST" id="contact-form" class="form-horizontal" >
			<fieldset>
				<div class="form-group">
					<label class="col-sm-4 control-label">Usuario</label>
					<div class="col-sm-8">
						<input type="text"  placeholder="Nombre de usuario" class="form-control" name="usuario" id="usuario">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Contraseña</label>
					<div class="col-sm-8">
						<input type="password" placeholder="contraseña" class="form-control" name="pass" id="pass">
					</div>
				</div>
	            <div class="col-sm-offset-4 col-sm-8">
			        <button type="submit" class="btn btn-success">ingresar</button>	     
	        	</div>
			</fieldset>
			</form>
				
				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
    <!-- /Contact -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/jquery-scrolltofixed-min.js"></script>
	<script src="bootstrap/js/jquery.vegas.js"></script>
	<script src="bootstrap/js/jquery.mixitup.min.js"></script>
	<script src="bootstrap/js/jquery.validate.min.js"></script>
	<script src="bootstrap/js/script.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	
<!-- Slideshow Background  -->
	<script>
$.vegas('slideshow', {
  delay:5000,
  backgrounds:[
     { src:'./img/u1.jpg', fade:2000 },
	 { src:'./img/u2.jpg', fade:2000 },
    { src:'./img/u3.jpg', fade:2000 },
	 { src:'./img/u4.jpg', fade:2000 },
    { src:'./img/u5.jpg', fade:2000 },

	   
  ]
})('overlay', {
src:'./img/overlay.png'
});

	</script>
<!-- /Slideshow Background -->

<!-- Mixitup : Grid -->
    <script>
		$(function(){
    $('#Grid').mixitup();
      });
    </script>
<!-- /Mixitup : Grid -->	

    <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
<!-- Navbar -->
<script type="text/javascript">
$(document).ready(function() {
        $('#nav').scrollToFixed();
  });
    </script>
<!-- /Navbar-->
	
  </body>

</html>