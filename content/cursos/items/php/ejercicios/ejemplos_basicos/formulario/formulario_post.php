<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../../../../assets/bootstrap520/css/bootstrap.min.css">
	<title>Formulario enviado con el método POST</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 class="text-center mt-5">FORMULARIO ENVIADO USANDO EL METODO POST</h1>

			<div class="w-75 m-auto mt-5">
				<form class="form-group" action="index.php" method="post">
					<div class="my-4">
						<label class="form-label" for="txtNombre">Nombre</label>
						<input class="form-control" type="text" id="txtNombre" name="txtNombre">
					</div>
					<div class="my-4">
						<label class="form-label" for="asignatura">Asignatura</label>
						<select class="form-select" name="asignatura" id="asignatura">
							<option class="disabled" value="">Seleccione un curso</option>
							<option value="Ingles">Ingles</option>
							<option value="Matematicas">Matematicas</option>
							<option value="Ciencias">Ciencias</option>
							<option value="Lenguaje">Lenguaje</option>
						</select>
					</div>
					<div class="my-4">
						<label class="form-check-label" for="opcion-1">
							<input class="form-check-input" type="checkbox" value="Manzana" id="opcion-1" name="frutas">Manzana
						</label>
					</div>
					<div class="my-4">
						<button class="btn btn-primary" type="submit">Enviar</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>	
</body>
</html>