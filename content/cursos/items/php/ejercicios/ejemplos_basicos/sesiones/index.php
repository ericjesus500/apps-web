<?php 

	session_name("LOGIN");
	session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-iscale=1.0">
	<link rel="stylesheet" href="../../../../../../assets/bootstrap520/css/bootstrap.min.css">
	<title>index de sesiones</title>
</head>
<body>
	<div class="container">
		<!-- Las veces que el navegador sea recargado en la pagina contador.php serán las mismas en la pagina index.php -->
		<!-- <div class="my-4"> -->
			<!-- <?php //echo "Haz recargado esta sesion: "."<b>".$_SESSION['contador']."</b>"." veces"."<br />"; ?> -->
		<!-- </div> -->
		<form class="form-group" action="login.php" method="post">
			<div class="my-4">
				<label class="form-label" for="usuario">Nombre</label>
				<input class="form-control" type="text" name="usuario" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ()]{3,10}" maxlength="10">
			</div>
			<div class="my-4">
				<label class="form-label" for="clave">clave</label>
				<input class="form-control" type="password" name="clave" pattern="[a-zA-Z0-9$@.-]{4,30}" maxlength="30">
			</div>
			<div class="my-4">
				<input type="submit" value="Login">
			</div>
		</form>		
	</div>
</body>
</html>