<?php

	header('Content-Type: text/html; charset=utf-8');
	
		if ($_REQUEST['cod'] == 1) {
			echo "<strong>acer</strong> Mejor cliente en PC";
		}
		if ($_REQUEST['cod'] == 2) {
			echo "<strong>asus</strong> Mejor cliente en Mainboards";
		}
		if ($_REQUEST['cod'] == 3) {
			echo "<strong>hp</strong> Mejor cliente en Portatiles";
		}
		if ($_REQUEST['cod'] == 4) {
			echo "<strong>dell</strong> Mejor cliente en Monitores";
		}
		if ($_REQUEST['cod'] == 5) {
			echo "<strong>aoc</strong> Mejor cliente en Servidores";
		}

?>
	