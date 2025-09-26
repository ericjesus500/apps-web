<?php 
	setcookie("Idioma", "es", time()+60*60*24*30*365, "/", "localhost", false, false );

	//Para eliminar una cookie se usa time negativo
	//setcookie("Idioma", "es", time()-60, "/", "localhost", false, false );

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>cookies</title>
 </head>
 <body>
 	<h1><?= $_COOKIE['Idioma'] ?></h1>
 </body>
 </html>