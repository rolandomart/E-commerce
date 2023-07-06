<?php include('head.php'); ?>
<!DOCTYPE html>
<html>
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
              <li ><a href="../menu.php">Inicio</a></li>
              <li><a class="navbar-right" href="../producto/producto.php">Producto</a></li>
              <li><a class="navbar-right" href="../proveedor/proveedor.php">Proveedor</a></li>
              <li><a class="navbar-right" href="../cliente/cliente.php">Cliente</a></li>
              <li ><a class="navbar-right" href="../empleado/empleado.php">Empleado</a></li>
              <li ><a class="navbar-right" href="../consultas/compra.php">Compra</a></li>
             <li ><a href="../login/logout.php">Cerrar Sesi&oacute;n</a></li>
            </ul>
          </div>
      </div>
    </nav>
  </header>
</body>
</html>