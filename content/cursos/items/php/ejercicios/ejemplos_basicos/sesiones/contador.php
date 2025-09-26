<?php 

	session_name("LOGIN");
	session_id("php");
	session_start();

	if (isset($_SESSION['contador'])) {
		$_SESSION['contador']++;
	}else{
		$_SESSION['contador'] = 1;
	}	

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../../../../assets/bootstrap520/css/bootstrap.min.css">
	<title>contador</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">	    
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="cerrar.php">Eliminar sesion</a>
	        </li>	        
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<?php 
			echo "Nombre de la sesion: "."<b>".session_name()."</b>"."<br />";
			echo "Id de la sesion: "."<b>".session_id()."</b>"."<br />";
			//echo "Haz recargado esta sesion: "."<b>".$_SESSION['contador']."</b>"." veces"."<br />";
			echo "Hola "."<b>".$_SESSION['Nombre']."</b>"." "."<b>".$_SESSION['Apellido']."</b>"."<br />";
			echo "Bienvenido desde "."<b>".$_SESSION['Pais']."</b>"."<br />";
		 ?>
	</div>
	
</body>
</html>
