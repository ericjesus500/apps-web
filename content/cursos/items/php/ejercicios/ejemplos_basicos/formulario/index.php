<?php 	

	$nombre = isset($_POST['txtNombre'])? $_POST['txtNombre'] : "";
	$asignatura = isset($_POST['asignatura'])? $_POST['asignatura'] : "";
	$frutas = isset($_POST['frutas'])? $_POST['frutas'] : "";


	if ($nombre ==="" && $asignatura === "" && $frutas === ""){
		echo "No hay ningún dato seleccionado <br />";		
	}

	if ($nombre ==="" && $asignatura != "" && $frutas != ""){
		echo "No hay nombre <br />";
		echo "$asignatura <br />";
		echo "$frutas <br />";		
	}

	if ($nombre ==="" && $asignatura === "" && $frutas != ""){
		echo "No hay nombre <br />";
		echo "No se ha seleccionado una asignatura <br />";
		echo "$frutas <br />";
	}

	if ($nombre ==="" && $asignatura != "" && $frutas === ""){
		echo "No hay nombre <br />";
		echo "$asignatura <br />";
		echo "No se ha seleccionado una fruta<br />";
	}	



	if($asignatura ==="" && $nombre != "" && $frutas != ""){
		echo "$nombre <br />";
		echo "NO hay asignatura seleccionada <br />";
		echo "$frutas";
	}

	if($asignatura ==="" && $nombre != "" && $frutas === ""){
		echo "$nombre <br />";
		echo "NO hay asignatura seleccionada <br />";
		echo "No hay fruta seleccionada";
	}



	if($frutas === "" && $nombre != "" && $asignatura != ""){
		echo "$nombre <br />";
		echo "$asignatura <br />";
		echo "No hay fruta seleccionada";
	}

	if($nombre != "" && $asignatura != "" && $frutas != ""){
		echo "$nombre <br />";
		echo "$asignatura <br />";
		echo "$frutas <br />";
	}
 ?>