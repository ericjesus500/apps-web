<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../../../../assets/bootstrap520/css/bootstrap.min.css">
	<title>select & checkbox multiple</title>
</head>
<body>
	<h1>SELECT & CHECKBOX MULTIPLE</h1>
	<div class="container">
		<form class="form-group" action="checkbox_index.php" method="post">
			<div class="my-4">
				<label class="form-check-label" for="opcion-1">
					<input class="form-check-input" type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">Manzana
				</label>
				<label class="form-check-label" for="opcion-2">
					<input class="form-check-input" type="checkbox" value="Naranja" id="opcion-2" name="frutas[]">Naranja
				</label>
				<label class="form-check-label" for="opcion-3">
					<input class="form-check-input" type="checkbox" value="Durazno" id="opcion-3" name="frutas[]">Durazno
				</label>
				<label class="form-check-label" for="opcion-4">
					<input class="form-check-input" type="checkbox" value="Platano" id="opcion-4" name="frutas[]">Platano
				</label>
			</div>
			<div class="my-4">
				<button class="btn btn-primary" type="submit">Enviar</button>
			</div>
		</form>		
	</div>
</body>
</html>