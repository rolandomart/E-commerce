
<!DOCTYPE>
<html>
<head>
<?php include('../head.php'); ?>
<?php include('../nav.php'); ?>

	<title>Muebleria Sur De M&eacute;xico</title>
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../footerStyle.css">
	<link rel="stylesheet" type="text/css" href="../estiloLogin.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
	<script type="../bootstrap/jquery-3.3.1.min.js"></script>
	<script type="../bootstrap/bootstrap.min.js"></script>
</head>

<body>
	<div class="login-box">
		<img src="../images/salaindex.jpg" class="avatar">
		<h1>Muebleria Sur De M&eacute;xico</h1>
		<form action="iniciaSesion.php" method="POST" autocomplete="off">
			<p class="etiq-ini">Usuario</p>
			<input type="text" name="user" placeholder="Introduce nombre de usuario" required>
			<p class="etiq-ini">Contrase&ntilde;a</p>
			<input type="password" name="pwd" placeholder="Introduce la contrase&ntilde;a" required>
			<button type="submit" name="enviar" class="btn btn-lgn btn-block">Ingresar al sistema</button>
		</form>
	</div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php 
	if(isset($_POST['enviar'])) {
		$user=$_POST['user'];
		$pass=$_POST['pwd'];
		include('../producto/conexion.php');
		session_start();
		$valido_user=mysqli_query($mysqli, "select * from usuario where user='$user' and password='$pass'");
		$datos_consulta=mysqli_fetch_row($valido_user);
		if(!$datos_consulta[1])
		{
			echo "<div class='text-center alert alert-warning'> El usuario no existe o es incorrecto</div>";
		}else{
			$_SESSION['user']=$datos_consulta[1];
			$_SESSION['password']=$datos_consulta[2];
			header("location:../menu.php");
		}

	}else{
	}


 ?>
<hr>	
</html>

<?php include('../footer.php');	?>