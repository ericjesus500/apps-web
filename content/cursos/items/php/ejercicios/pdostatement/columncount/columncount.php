<?php

include_once "../conexion/conexion.php";

class ReadData
{

  public function leerData()
  {
    $cnx = new Conexion;
    $cnx = Conexion::conectar();
    $sql = 'SELECT guia_id, guia_titulo, guia_href_local FROM guia';
    try {
      $stmt = $cnx->prepare($sql);
      $stmt->execute();
      $nroColumns= $stmt->columnCount();
      return "Nro de Columnas de la consulta: " . $nroColumns;

    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }
}

?>