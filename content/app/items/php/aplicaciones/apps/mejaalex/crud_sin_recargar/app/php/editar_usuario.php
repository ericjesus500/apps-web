<?php 

	include "../config/conexion.php";
	

	$usuario = $_POST['usuario_'];
	$correo = $_POST['correo_'];
	$telefono = $_POST['telefono_'];
	$rol = $_POST['rol_'];
	$id = $_POST['id_'];

	$sql = "UPDATE usuarios SET usuario = '$usuario', correo = '$correo', telefono = '$telefono', rol = '$rol' WHERE id_cliente = $id";

	$result = mysqli_query($conex, $sql);
	mysqli_close($conex);

 ?>