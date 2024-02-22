<?php 

$server="127.0.0.1:3306";
$user="root";
$passw="1234";
$bd="cinema";

$conn= new mysqli($server, $user, $passw, $bd);

if ($conn->connect_error) {
	die("error de conexion".$conn->connect_error);
}


 ?>