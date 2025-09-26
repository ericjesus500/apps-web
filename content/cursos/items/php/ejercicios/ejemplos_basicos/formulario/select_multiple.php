<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../../../../assets/bootstrap520/css/bootstrap.min.css">
	<title>select multiple</title>
</head>
<body>
	<h1>SELECT MULTIPLE</h1>
	<div class="container">
		<form class="form-group" action="select_index.php" method="post">			
			<div class="my-4">
				<label class="form-label" for="asignatura">Asignatura</label>
				<!-- name="asignatura[]" => significa que es un array -->
				<select class="form-select" name="asignatura[]" id="asignatura" multiple>
					<option value="Ingles">Ingles</option>
					<option value="Matematicas">Matematicas</option>
					<option value="Ciencias">Ciencias</option>
					<option value="Lenguaje">Lenguaje</option>
				</select>
			</div>			
			<div class="my-4">
				<button class="btn btn-primary" type="submit">Enviar</button>
			</div>
		</form>		
	</div>
</body>
</html>