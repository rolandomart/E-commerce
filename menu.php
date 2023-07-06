<?php 

  if(session_status()==PHP_SESSION_NONE)
  {
    session_start();
  }
  if(!isset($_SESSION['user'])) {
    die('acceso denegado!');
  }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php'); ?>
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
            <a  class="navbar-brand">Muebleria Sur De M&eacute;xico</a>
        </div>
            <!--Inicia Menu-->
          <div class="collapse navbar-collapse" id="navegacion-fm">
            <ul class="nav navbar-nav">
              <li ><a href="#">Inicio</a></li>
              <li><a class="navbar-right" href="producto/producto.php">Producto</a></li>
              <li><a class="navbar-right" href="proveedor/proveedor.php">Proveedor</a></li>
              <li><a class="navbar-right" href="cliente/cliente.php">Cliente</a></li>
              <li ><a class="navbar-right" href="empleado/empleado.php">Empleado</a></li>
               <li ><a class="navbar-right" href="consultas/compra.php">Compra</a></li>
              <li><a href="login/logout.php">Cerrar Sesi&oacute;n</a></li>
            <li ><a class="navbar-brand" >Administrador</a></li>

            </ul>

          </div>
      </div>
    </nav>
  </header>
  

  <!--carrusel-->
  <?php  include('carrusel.php');?>
       <!-- Controles -->

  <script src="js/jquery-1.11.1.min.js"></script>

<script>
  
  $('.carousel').carousel({

      interval: 3000,
      pause:"hover"

  });
</script>
 
  <section class="main container"></section>
  <br><br><br><br><br><br><br>
    <?php include('footerIndex.php'); ?>
</body>
</html>


