<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../../../../assets/bootstrap520/css/bootstrap.min.css">
	<title>Subir archivos al servidor</title>
</head>
<body>

	<div class="container">
		<form class="form-group" action="subir_archivos_carga.php" method="post" enctype="multipart/form-data">
			<div class="my-4">				
				<input class="form-control" type="file" name="fichero" accept=".jpg, .jpeg, .png">
			</div>
			<div class="my-4">
				<input type="submit" value="Enviar fichero">
			</div>
		</form>
	</div>
	
</body>
</html>
