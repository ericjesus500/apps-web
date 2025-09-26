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
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $datos[] = ["nombre"=>$row['usuario_nombre'], "apellido"=>$row['usuario_apellido'], "email"=>$row['usuario_email'] ];
      }
      $cnx = null;
      $stmt = null;

      return $datos;

    } catch (PDOException $e) {
      print $e->getMessage();
    }    
  }
}
