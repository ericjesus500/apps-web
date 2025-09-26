<?php 

	$numero = $_POST['numero'];

	if (isset($numero) && $numero !="") {
		for ($i=12; $i >=1 ; $i--) { 
			echo "$numero  X $i " . " = " . $numero*$i . "<br />";
		}
	}else{
		echo "Ingrese un valor numérico mayor a cero";
	}


?>