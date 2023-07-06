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
   require_once'conexion.php';


   $where="";

   $sql = " SELECT * FROM empleado";
   $resultado=$mysqli->query($sql);


		
?>

<html lang="es">
<head>
	<meta name="viewport" content="width-device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../footerStyle.css">
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
			<h2 style="text-align:center;">Consulta Empleado</h2>
		</div>
		<br>
		<div class="row">
			<a href="nuevo.php" class="btn btn-info">Nuevo Registro</a>
		</div>
		<br>
		<div class="row">
			<a href="../pdf/empleado.php" target="blank" class="btn btn-info">Reporte pdf</a>
		</div>
		<br>
		<div class="row table-responsive">
			<table class="display" id="mitabla">
				<thead>
					<tr>
						<th>Usuario</th>
						<th>Nombre</th>
						<th>Tel&eacute;fono</th>
						<th>Direcci&oacute;n</th>
						<th>Fecha de nacimento</th>
						<th>E-mail</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['usuario']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><?php echo $row['direccion']; ?></td>
								<td><?php echo $row['fecha_nac']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<?php  
								$usuario =$row['usuario'];
								echo "<td class='centrar'><a href='modificar.php?usuario=$usuario'><img class='icono' src='../icon/modificar2.png'></a></td>";
						 
								echo "<td class='centrar'><a class='delete' href='eliminar.php?usuario=$usuario'><img class='icono' 
								src='../icon/eliminar2.png'></a></td>";
								 ?>
							</tr>
							<?php } ?>
				</tbody>

			</table>
		</div>
	</div>
	<br><br><br>
	<?php include('../footer.php');?>
</body>
</html>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded',function(){
		var botones=document.getElementsByClassName("delete");
		var confirmar=function (evento){
			if(!confirm("¿Desea eliminar el registro?")){
				evento.preventDefault();

			}
         }
         for (var i=0;i<botones.length;i++){
         	botones[i].addEventListener('click',confirmar,false);
         }
	});
</script>