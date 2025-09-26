<?php

include_once "../conexion/conexion_ca.php";

class AgregarData{

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
      echo "Registro guardado";
      
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }

  public function newData1($nombre, $apellido, $email)
  {
    $cnx = new Conexion;
    $cnx = Conexion::conectar();
    $sql = "INSERT INTO usuario (usuario_nombre, usuario_apellido, usuario_email) VALUES (:nombres, :apellidos, :email)";
    try {
      $stmt = $cnx->prepare($sql);

      $stmt->bindParam(':nombres', $nombre);
      $stmt->bindParam(':apellidos', $apellido);
      $stmt->bindParam(':email', $email);

      $stmt->execute();
      echo "Registro guardado";
      
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }

}

?>