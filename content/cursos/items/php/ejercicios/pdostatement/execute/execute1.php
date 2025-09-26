<?php

class InsertData
{
  public $nombre;
  public $email;
  public $pass;

  public function __construct($nombre, $email, $pass)
  {
    $this->nombre = $nombre;
    $this->email = $email;
    $this->pass = $pass;
  }
}

if ($_POST) {
  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
  $email = isset($_POST['email']) ? $_POST['email'] : "";
  $pass = isset($_POST['passw']) ? $_POST['passw'] : "";

  if ($nombre != "" && $email != "" && $pass != "") {

    try {
      include_once "../conexion/conexion_prueba.php";
      $cnx = new Conexion;
      $cnx = Conexion::conectar();
      $file = new InsertData($nombre, $email, $pass);
      $sql = "INSERT INTO usuarios (usuario_nombre, usuario_email, usuario_pass) VALUES (:nombre, :email, :pass)";
      $stmt = $cnx->prepare($sql);
      $stmt->execute((array) $file);

      echo "registro guardado";
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  } else {
    die("Ingrese todos los datos solicitados");
  }
}

?>