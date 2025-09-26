<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio break - continue</title>
</head>
<body>
	<?php 

		$c = 1;

		while ($c<=20) {
			if ($c==10) {
				break;
			}
			echo $c."<br />";
			$c++;
		}

		echo "===================<br />";

		$a=1;
		while($a<=20) {
			if($a==10) {
				$a++;
				continue;
			}
			echo $a."<br />";
			$a++;
		}

		echo "===================<br />";

		$pc = ["SO", "SSD", "GPU", "RAM", "CPU"];
		foreach($pc as $componente) {
			echo $componente."<br />";
			if($componente=="GPU"){
				break;
			}
		}

		echo "===================<br />";

		foreach($pc as $componente) {
			if($componente=="GPU"){
				continue;
			}
			echo $componente."<br />";
		}

		echo "===================<br />";


		for ($i=1; $i<=10 ; $i++) { 
			if ($i==5) {
				continue;
			}
			echo $i."<br />";
		}

	?>
</body>
</html>