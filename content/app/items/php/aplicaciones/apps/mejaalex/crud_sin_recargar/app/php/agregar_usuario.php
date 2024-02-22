<?php 

	include "../config/conexion.php";

	$usuario = $_POST['agg_usuario'];
	$contrasenia = $_POST['agg_contrasenia'];
	$correo = $_POST['agg_correo'];
	$telefono = $_POST['agg_telefono'];

	$sql="INSERT INTO usuarios (usuario, contrasenia, correo, telefono, rol) VALUES ('$usuario', '$contrasenia', '$correo', '$telefono', 'Cliente')";

	$result = mysqli_query($conex, $sql);

 ?>