<?php

$host = "localhost:3306";
$bd = "develoteca_libreria";
$usuario = "root";
$password = "1234";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $password);
    if ($conexion) {
        echo "Conectado a sistema";
    }
} catch (Exception $error) {
    echo $error->getMessage();
}

?>