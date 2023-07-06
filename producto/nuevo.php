<?php  include('../head.php'); ?>
<?php  include('../nav.php'); ?>



<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../footerStyle.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/estilos.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
	<script type="../bootstrap/jquery-3.3.1.min.js"></script>
	<script type="../bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<br>
  <div class="container">
  	<div class="row">
  		<h3 style="text-align:center;">Nuevo Registro</h3>
  	</div>
	 <form action="registrar.php" class="form-horizontal" method="POST" enctype="multipart/form-data" autocomplete="off">
	 	<br>
          <fieldset>
  	 	     <div class="form-group">
		       <label for="codigo">C&oacute;digo </label>
		       <div>
		       <input name="codigo" class="form-control" id="codigo" type="number" placeholder="Digite el c&oacute;digo del producto" required>
		       </div>
            </div>
            <div class="form-group">
		       <label for="nombre validation">Nombre</label>
		       <div>
		       <input name="nombre" class="form-control" id="nombre" type="text" placeholder="Nombre" required>
		       </div>
            </div>

           <div class="form-group">
		       <label for="descripcion">Descripci&oacute;n</label>
		       <div>
		       <input class="form-control" id="descripcion"  name="descripcion" type="text" placeholder="Descripci&oacute;n">
		       </div>
            </div>

              <div class="form-group">
		       <label for="precio">Precio</label>
		       <div>
		       <input class="form-control" id="precio" name="precio" type="number" placeholder="$$$$" required>
		       </div>
            </div>

             <div class="form-group">
		       <label for="cantidad">Cantidad</label>
		       <div>
		       <input class="form-control" id="cantidad" name="cantidad" type="number" placeholder="Cantidad de producto" required>
		       </div>

		       <br>
		       <a href="producto.php" class="btn btn-danger">Cancelar</a>
		    	<button class="btn btn-primary">Guardar</button>
            </div>
            <div>
            	 
		    </div>
	</fieldset>
	 </form>
   </div>
   	  <?php include('../footer.php'); ?>
</body>