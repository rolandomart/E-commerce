<?php
	include('../head.php'); 
	include('../nav.php');
	require 'conexion.php';
	
	$idproveedor = $_GET['idproveedor'];
	
	$sql = "SELECT * FROM proveedor WHERE idproveedor = '$idproveedor'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
  		<h3 style="text-align:center;">Modificando Registro</h3>
  	</div>
	 <form action="update.php" class="form-horizontal" method="POST" autocomplete="off">
          <fieldset>
  	 	    
            	<input type="hidden" name="id" id="id" value="<?php echo $idproveedor ?>">

             <div class="form-group">
		       <label for="nombre validation">Nombre</label>
		       <div>
		       <input name="nombre" class="form-control" id="nombre" type="text" placeholder="nombre" value="<?php echo $row['nombre']; ?>" required>
		       </div>
            </div>

         <div class="form-group">
		       <label for="telefono">Tel&eacute;fono</label>
		       <div>
		       <input class="form-control" id="telefono"  name="telefono" type="number" placeholder="Tel&eacute;fono" value="<?php echo $row['telefono']; ?>" required>
		       </div>
            </div>

             <div class="form-group">
		       <label for="direccion">Direcci&oacute;n</label>
		       <div>
		       <input class="form-control" id="direccion" name="direccion" type="text" placeholder="Direcci&oacute;n" value="<?php echo $row['direccion']; ?>" required>
		       </div>

            </div>

            <div class="form-group">
		       <label for="email">E-mail</label>
		       <div>
		       <input class="form-control" id="email" name="email" type="text" placeholder="email@example.com" value="<?php echo $row['email']; ?>" required>
		       </div>
		      <br>
		       	 <a href="proveedor.php" class="btn btn-danger">Cancelar</a>
		    	<button class="btn btn-primary">Guardar</button>
		    </div>
            </div>
            <div>
            
	</fieldset>
	 </form>
   </div>
   <br><br>
   <?php include('../footer.php');?>
</body>