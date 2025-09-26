<?php

include_once "../conexion/conexion_ca.php";

class ShowData
{  
  public $nombre;
  public $apellido;
  public $email;
  //public $id = null;

  public function verData($id)
  {
    //$this->id = $id;
    $cnx = new Conexion;
    $cnx = Conexion::conectar();
    $sql = "SELECT usuario_id, usuario_nombre, usuario_apellido, usuario_email FROM usuario WHERE usuario_id = $id";
    try {
      $stmt = $cnx->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetchObject();
      
      $cnx = null;
      $stmt = null;
      return $resultado;

    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }
  
}
