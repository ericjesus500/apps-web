<?php 

	require "../config/database.php";

	$id=$conn->real_escape_string($_POST['id']);
	$nombre=$conn->real_escape_string($_POST['nombre']);
	$descripcion=$conn->real_escape_string($_POST['descripcion']);
	$genero=($_POST['genero']);

	$sql="UPDATE pelicula 
	SET nombre_pelicula = '$nombre', descripcion = '$descripcion', id_gen = $genero
	WHERE id_pelicula=$id";
	
	if($conn->query($sql)){
		
		$_SESSION['color'] = "success";
		$_SESSION['msg'] = "Registro actualizado correctamente";

		if($_FILES['poster']['error'] == UPLOAD_ERR_OK){
			$permitidos = array("image/jpg", "image/jpeg");

			if(in_array($_FILES['poster']['type'], $permitidos)){
				$dir = "posters";

				$info_img = pathinfo($_FILES['poster']['name']);
				$info_img['extension'];
				$poster = $dir . '/' . $id . '.jpg';

				if(!file_exists($dir)){
					mkdir($dir, 0777);
				}

				if(!move_uploaded_file($_FILES['poster']['tmp_name'], $poster)){
					$_SESSION['color'] = "danger";
					$_SESSION['msg'] .= "<br>Error al actualizar imagen";
				}

			} else {
				$_SESSION['color'] = "danger";
				$_SESSION['msg'] .= "<br>Formato de imagen no permitido";
			}
		}
	} else {
		$_SESSION['color'] = "danger";
		$_SESSION['msg'] = "Error al actualizar registro";
	}

	header('Location: index.php');

 ?>