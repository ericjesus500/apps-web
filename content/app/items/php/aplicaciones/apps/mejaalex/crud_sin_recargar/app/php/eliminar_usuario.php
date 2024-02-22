<?php 

	include "../config/conexion.php";	

	$usuario = $_POST['del_usuario'];	
	$id = $_POST['del_id'];

	$sql = "DELETE FROM usuarios WHERE id_cliente = $id AND usuario = '$usuario'";

	$result = mysqli_query($conex, $sql);
	mysqli_close($conex);

 ?>