<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>AJAX PHP FETCH API</title>
</head>
<body>

	<div class="container">
		<form class="form-group FormularioAjax" action="subir_archivos_carga.php" method="post" enctype="multipart/form-data">
			<div class="my-4">				
				<input class="form-control" type="file" name="fichero" accept=".jpg, .jpeg, .png">
			</div>
			<div class="my-4">
				<input type="submit" value="Enviar fichero">
			</div>
		</form>
	</div>
	
	<script src="./ajax_php.js"></script>
</body>
</html>
