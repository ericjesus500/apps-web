<?php 

var_dump($_POST['frutas']);
echo "</ br>";

echo "VISTA CON FOREACH <br/>";
$frutas = $_POST['frutas']; 
foreach ($frutas as $fruta) {
	echo $fruta."<br />";
}


 ?>