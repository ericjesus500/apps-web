<?php

include_once "../conexion/conexion_ca.php";

class AddData{

  public function insertData($nombre, $apellido, $email)
  {
    $cnx = new Conexion;
    $cnx = Conexion::conectar();
    $sql = "INSERT INTO usuario (usuario_nombre, usuario_apellido, usuario_email) VALUES (:nombres, :apellidos, :email)";
    try {
      $stmt = $cnx->prepare($sql);

      $stmt->execute(array(':nombres'=>$nombre, ':apellidos'=>$apellido, ':email'=>$email));
      
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }

}

?>