<?php
	include('../head.php'); 
	include('../nav.php');
  require 'conexion.php'; 

  $codigo=$_GET['codigo'];


  $sql = "DELETE FROM producto WHERE codigo = '$codigo'";
  $resultado = $mysqli->query($sql);

?>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../bootstrap/estilos.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
	<script type="../bootstrap/jquery-3.3.1.min.js"></script>
	<script type="../bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>Registro Eliminado</h3>
							<?php header('Location: producto.php'); ?>
						<?php } else { ?>
						<h3>Ocurrio un error al intentar eliminar</h3>
					<?php } ?>
               <a href="producto.php" class="btn btn-primary">Regresar</a>
			</div>
			
		</div>
		
	</div>
	  <?php include('../footer.php'); ?>
	
</body>
</html>