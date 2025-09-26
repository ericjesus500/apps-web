<?php

include_once "../../conexion/conexion_ca.php";

class ShowData
{
  public function verData()
  {
    $cnx = new Conexion;
    $cnx = Conexion::conectar();
    $sql = "SELECT usuario_nombre, usuario_apellido, usuario_email FROM usuario WHERE 1";
    try {
      $stmt = $cnx->prepare($sql);
      $stmt->execute();      
      $resultado = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
      $cnx = null;
      $stmt = null;
      return $resultado;
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }
}
