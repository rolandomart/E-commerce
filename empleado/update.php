<?php

  include('../head.php'); 
  include('../nav.php'); 
  require 'conexion.php'; 

  $id = $_POST['id'];
  $usuario = $_POST['usuario'];
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $direccion = $_POST['direccion'];
  $email = $_POST['email'];
  $fecha_nac = $_POST['fecha_nac'];
 


  $sql = "UPDATE empleado SET nombre='$nombre', telefono='$telefono', direccion='$direccion', email='$email', usuario='$usuario', fecha_nac='$fecha_nac' WHERE usuario =  '$usuario'";
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
						<h3>Registro Modificado</h3>
						<?php } else {
						 ?>
						<h3>Ocurrio un error al intentar modificar</h3>
					<?php } ?>
               <a href="empleado.php" class="btn btn-primary">Regresar</a>
			</div>
			
		</div>
		
	</div>
	<br><br><br><br><br><br><br><br><br><br><br>
	<?php include('../footer.php'); ?>
</body>
</html>