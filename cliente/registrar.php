<?php
	 include('../head.php'); 
	 include('../nav.php');
  require 'conexion.php'; 
  
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $direccion = $_POST['direccion'];
  $email = $_POST['email'];


  $sql = "INSERT INTO cliente (idcliente,nombre,telefono,direccion,email) VALUES (0,'$nombre', '$telefono', '$direccion', '$email')";
  $resultado = $mysqli->query($sql);

?>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../footerStyle.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
	<script type="../bootstrap/jquery-3.3.1.min.js"></script>
	<script type="../bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>Registro Guardado</h3>
						<?php } else { ?>
						<h3>Ocurrio un error al intentar guardar</h3>
					<?php } ?>
               <a href="cliente.php" class="btn btn-primary">Aceptar</a>
			</div>
			
		</div>
		
	</div>
	<br><br><br><br><br><br><br><br><br><br><br>
	<?php include('../footer.php');?>
</body>
</html>