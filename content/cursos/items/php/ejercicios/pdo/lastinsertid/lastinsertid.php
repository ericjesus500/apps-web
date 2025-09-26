<?php

include_once "../conexion/conexion_ca.php";

class AgregarData
{
  public $id;
  public $titulo;
  public $url;

  public function newData($nombre, $apellido, $email)
  {
    $cnx = new Conexion;
    $cnx = Conexion::conectar();
    $sql = "INSERT INTO usuario (usuario_nombre, usuario_apellido, usuario_email) VALUES (?, ?, ?)";
    try {
      $stmt = $cnx->prepare($sql);

      $stmt->bindParam(1, $nombre);
      $stmt->bindParam(2, $apellido);
      $stmt->bindParam(3, $email);

      $stmt->execute();
      $lastinsertid = $cnx->lastInsertId();
      echo "Registro con ID:$lastinsertid guardado";

    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }
}

?>