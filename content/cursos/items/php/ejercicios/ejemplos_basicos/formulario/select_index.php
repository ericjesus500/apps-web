<?php 

var_dump($_POST['asignatura']);
echo "</ br>";
echo "VISTA CON FOREACH <br/>";

foreach ($_POST['asignatura'] as $asignatura) {
	echo $asignatura."<br />";
}


 ?>