<?php 

  include_once "config_prueba.php";

  class Conexion extends Config{
    public $cnx = null;
    static $host = Config::HOST;
    static $port = Config::PORT;
    static $db = Config::BD;
    static $user = Config::USER;
    static $passw = Config::PASSW;
      
    public static function conectar(){
      try {
        if (!isset(self::$cnx)) {
          $dsn = "mysql:host=" . self::$host . ":" . self::$port . ";" . "dbname=" . self::$db;
          $cnx = new PDO($dsn, self::$user, self::$passw);
          $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo "Buena!...Conexion exitosa";
          return $cnx;
        }
      } catch (PDOStatement $e) {
        return "Error de Conexión: " . $e->errorCode();
        die();
      }
    }
    
  }

?>