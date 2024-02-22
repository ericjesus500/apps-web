<?php 

	session_start();

	require "../config/database.php";

	$id=$conn->real_escape_string($_POST['id']);
	

	$sql="DELETE FROM pelicula WHERE id_pelicula=$id";

	if($conn->query($sql)){
		
		$dir = "posters";
		$poster = $dir . '/' . $id . '.jpg';

		if(file_exists($poster)){
			unlink($poster);
		}

		$_SESSION['color'] = "warning";
		$_SESSION['msg'] = "Registro eliminado satisfactoriamente";

	} else {
		$_SESSION['color'] = "danger";
		$_SESSION['msg'] = "Error al eliminar registro";
	}

	header('Location: index.php');

 ?>