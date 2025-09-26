<?php 

	//Determinar si un directorio existe
	if (!file_exists("archivos_subidos")) {
		//si no existe se crea y se le dan todos los permisos
		if (!mkdir("archivos_subidos", 0777)) {
			echo "Error al crear el directorio";
			exit();
		}
	}

	//Darle todos los permisos al directorio
	chmod("archivos_subidos", 0777);

	//Controlar el tipo de archivos que se desean aceptar
	if(mime_content_type($_FILES['fichero']['tmp_name'])!="image/jpeg" && mime_content_type($_FILES['fichero']['tmp_name'])!="image/png" && mime_content_type($_FILES['fichero']['tmp_name'])!="image/jpg"){
		echo "Tipo de fichero no admitido";
		exit();
	}

	//Limitar el peso del archivo permitido
	if (($_FILES['fichero']['size']/1024) > 3072) {
		echo "Error: el archivo supera el tamaño permitido max. de 3Mb";
		exit();
	}

	//Mover o grabar el archivo al directorio creado
	if (move_uploaded_file($_FILES['fichero']['tmp_name'], "archivos_subidos/".$_FILES['fichero']['name'])) {
		echo "Archivo subido con exito";
	} else {
		echo "Error al subir archivo";
	}


?>