<?php

class Conexion{

  private static $cnx = null;
  private $host = "127.0.0.1:3306";
  private $dbname = "codigos";
  protected $user = "admin";
  protected $passw="admin";
  

  public function conexion()
  {
    try {
      if (!isset(self::$cnx)) {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        self::$cnx = new PDO($dsn, $this->user, $this->passw);
        self::$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
    } catch (PDOStatement $e) {
      return "Error de Conexión: " . $e->errorCode();
      die();
    }
  }
  
  public function consulta(){
    $this->conexion();
    $sql = "SELECT * FROM tecnologia WHERE 1";
    $result = self::$cnx->query($sql);
    foreach ($result as $row) {
      print "ID: " . $row['tecno_id'] . " Nombre: " .  $row['tecno_nombre'] . "<br />";
    }
    self::$cnx = null;
    $result = null;
  }
}

$cnx = new Conexion;
echo $cnx->consulta();








