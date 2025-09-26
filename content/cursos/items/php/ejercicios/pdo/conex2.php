<?php
$dbname = "codigos";
$user = "admin";
$passw = "admin";
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
try {
  $dsn = "mysql:host=127.0.0.1:3306;dbname=$dbname";
  $cnx = new PDO($dsn, $user, $passw, $options);
  echo "Conexión exitosa";
} catch (PDOException $e) {
  echo "Error de Conexión: " . $e->getMessage();
}

// Cerrar la conexion
$cnx = null;
