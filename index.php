<?php
include('head.php');
 require_once('proveedor/conexion.php');


   $where="";

   $sql = " SELECT * FROM producto";
   $resultado=$mysqli->query($sql);
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal</title>
</head>

<html lang="es">
<head>
  <meta charset="utf-8">  
		

</head>
<body> 
	<header>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm"> 
            <pan class="sr-only">Desplegar / Ocultar Menu</pan>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
            <a href="#" class="navbar-brand">Muebleria Sur De M&eacute;xico</a>
        </div>
            <!--Inicia Menu-->
          <div class="collapse navbar-collapse" id="navegacion-fm">
            <ul class="nav navbar-nav">
              <li><a href="#">Inicio</a></li>
              <li><a href="login/iniciaSesion.php">Iniciar Sesi&oacute;n</a></li>
            </ul>
          </div>
      </div>
    </nav>
  </header>
  <div class="container-for">

  <?php  include('carrusel.php');?>
  
  </div>

      <!-- Contenido imágenes -->


  <script src="js/jquery-1.11.1.min.js"></script>
</script>
	
	</div>
	<br><br><br>
  <?php  include('footerIndex.php'); ?>
</body>
</html>