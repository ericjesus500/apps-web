<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio FOREACH</title>
</head>
<body>
	<?php 

		$laptop = ["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

		foreach ($laptop as $valor) {
			echo $valor."<br />";
		}

		echo "<br /><br /><br />";

		$laptop1 = ["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

		foreach ($laptop1 as $clave => $valor) {
			echo $clave." - ".$valor."<br />";
		}

		echo "<br /><br /><br />";

		$frutas = [
			"Fresas" => 100,
			"Peras" => 30,
			"Sandias" => 10,
			"Melocotones" => 17,
			"Manzanas" => 9
		];

		foreach ($frutas as $key => $fruta) {
			echo $key . " ==> " . $fruta . "<br />";
		}

		echo "<br /><br /><br />";

		$productos = [
			["codigo" => "A0001", "descripcion" => "Mouse"],
			["codigo" => "A0002", "descripcion" => "Teclado"],
			["codigo" => "A0003", "descripcion" => "Monitor"],
			["codigo" => "A0004", "descripcion" => "Impresora"]
		];

		foreach ($productos as $producto) {
			echo $producto["codigo"] . " - " . $producto["descripcion"] . "<br />";
		}

	?>
</body>
</html>