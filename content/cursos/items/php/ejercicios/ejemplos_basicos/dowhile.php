<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio do while</title>
</head>
<body>
	<?php 

		$c=1;

		do{
			echo $c."<br />";
			$c++;
		}while($c<=20);

	echo "============== <br />";

	$cont=1;
	$base = 5;

	do{
		echo "$cont x $base =".$cont*$base."<br />";
		$cont++;
	}while($cont<=12);
	?>
	
</body>
</html>