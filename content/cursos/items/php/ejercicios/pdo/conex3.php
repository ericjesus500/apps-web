<?php
$dbname = "codigos";
$user = "admin";
$passw = "admin";
try {
  $dsn = "mysql:host=127.0.0.1:3306;dbname=$dbname";
  $cnx = new PDO($dsn, $user, $passw);
  //$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
  //$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexión exitosa";
} catch (PDOStatement $e) {  
  echo "Error de Conexión: " . $e->errorCode();
}

// Cerrar la conexion
$cnx = null;
