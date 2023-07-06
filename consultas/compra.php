<?php
if(session_status()==PHP_SESSION_NONE)
  {
    session_start();
  }
  if(!isset($_SESSION['user'])) {
    die('acceso denegado!');
  }
    include('../head.php');
	include('../nav.php');
   require_once('../proveedor/conexion.php');


   $where="";

   $sql = " SELECT * FROM compra";
   $resultado=$mysqli->query($sql);


		
?>

<html lang="es">
<head>
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../footerStyle.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap/estilos.css">
	<link href="../bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="../bootstrap/bootstrap-theme.css" rel="stylesheet">
		<link href="../bootstrap/jquery.dataTables.min.css" rel="stylesheet">
		<script src="../bootstrap/jquery-3.1.1.min.js"></script>
		<script src="../bootstrap/bootstrap.min.js"></script>	
		<script src="../bootstrap/jquery.dataTables.min.js"></script>

		<script>
			$(document).ready(function(){
				$('#mitabla').DataTable({
					"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina",
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					},


				});

			});
		</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 style="text-align:center;">Consulta</h2>
		</div>
		<br>
		<div class="row table-responsive">
			<table class="display" id="mitabla">
				<thead>
					<tr>
						
						<th>idcompra</th>
						<th>idcliente</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['idcompra']; ?></td>
								<td><?php echo $row['idcliente']; ?></td>
								<td><?php echo $row['fecha']; ?></td>
								
							</tr>
							<?php } ?>
				</tbody>

			</table>
		</div>
	</div>
	<br>	<br>	<br>	<br>	<br>	
		  <?php include('../footer.php'); ?>
</body>
</html>