<?php  include('../head.php'); ?>
<?php  include('../nav.php'); ?>

<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../footerStyle.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
	<script type="../bootstrap/jquery-3.3.1.min.js"></script>
	<script type="../bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<br>
  <div class="container">
  	<div class="row ">
  		<h3 style="text-align:center">Nuevo Registro</h3>
  	</div>
	 <form action="registrar.php" class="form-horizontal" method="POST" autocomplete="off">
	 	<br>
          <fieldset>

             <div class="form-group">
		       <label for="nombre validation">Nombre</label>
		       <div>
		       <input name="nombre" class="form-control " id="nombre" type="text" placeholder="Nombre" required>
		       </div>
            </div>

            <div class="form-group">
		       <label for="telefono">Tel&eacute;fono</label>
		       <div>
		       <input type="number" class="form-control" id="telefono"  name="telefono" type="text" placeholder="Tel&eacute;fono" pattern="[0-9]{10}" maxlength="10" required>
		       </div>
            </div>

             <div class="form-group">
		       <label for="direccion">Direcci&oacute;n</label>
		       <div>
		       <input class="form-control" id="direccion" name="direccion" type="text" placeholder="Direcci&oacute;n" required>
		       </div>

            </div>

            <div class="form-group">
		       <label for="email">E-mail</label>
		       <div>
		       <input class="form-control" id="email" name="email" type="email" placeholder="email@example.com" required>
		       </div>
		      <br>
		       <a href="proveedor.php" class="btn btn-danger">Cancelar</a>
		    	<button class="btn btn-primary">Guardar</button>
            </div>
            <div>
            	 
		    </div>
	</fieldset>
	 </form>
   </div>
   <?php include('../footer.php');?>
</body>