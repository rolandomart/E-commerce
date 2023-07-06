<?php
	 include('../head.php'); 
	 include('../nav.php');
	require 'conexion.php';
	
	$codigo = $_GET['codigo'];
	
	$sql = "SELECT * FROM producto WHERE codigo = '$codigo'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>

<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../bootstrap/estilos.css">
			<link rel="stylesheet" type="text/css" href="../footerStyle.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
	<script type="../bootstrap/jquery-3.3.1.min.js"></script>
	<script type="../bootstrap/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  	<div class="row">
  		<h3 style="text-align:center;">Modificando Registro</h3>
  	</div>
	 <form action="update.php" class="form-horizontal" method="POST" autocomplete="off">
          <fieldset>
  	 	    <div class="form-group">
		       <label for="codigo">C&oacute;digo</label>
		       <div>
		       <input name="codigo" class="form-control" id="codigo" type="text" placeholder="Digite el c&oacute;digo" value="<?php echo $row['codigo']; ?>">
		       </div>
            </div>
            		<input type="hidden" name="id" id="id" value="<?php echo $row['codigo']; ?>">

              <div class="form-group">
		       <label for="nombre validation">Nombre</label>
		       <div>
		       <input name="nombre" class="form-control" id="nombre" type="text" placeholder="Nombre" value="<?php echo $row['nombre']; ?>">
		       </div>
            </div>

              <div class="form-group">
		       <label for="descripcion">Descripci&oacute;n</label>
		       <div>
		       <input class="form-control" id="descripcion"  name="descripcion" type="num" placeholder="Descripci&oacute;n" value="<?php echo $row['descripcion']; ?>">
		       </div>
            </div>

             <div class="form-group">
		       <label for="precio">Precio</label>
		       <div>
		       <input class="form-control" id="precio" name="precio" type="num" placeholder="$$$$" value="<?php echo $row['precio']; ?>">
		       </div>

            </div>

            <div class="form-group">
		       <label for="cantidad">Cantidad</label>
		       <div>
		       <input class="form-control" id="cantidad" name="cantidad" type="num" placeholder="Cantidad" value="<?php echo $row['cantidad']; ?>">
		       </div>
		       <br>
                <a href="producto.php" class="btn btn-danger">Cancelar</a>
		    	<button class="btn btn-primary">Guardar</button>
		    </div>
            </div>
            <div>
            	 
	</fieldset>
	 </form>
   </div>
   <br><br>
   	  <?php include('../footer.php'); ?>
</body>
</html>