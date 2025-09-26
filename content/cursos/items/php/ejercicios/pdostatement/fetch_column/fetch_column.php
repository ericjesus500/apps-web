<?php

include_once "../conexion/conexion_ca.php";

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
      $col1 = $stmt->fetchColumn(0);
      $col2 = $stmt->fetchColumn(1);
      $col3 = $stmt->fetchColumn(2);
      $cols = array($col1, $col2, $col3);
      $cnx = null;
      $stmt = null;
      return $cols;
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }
}
