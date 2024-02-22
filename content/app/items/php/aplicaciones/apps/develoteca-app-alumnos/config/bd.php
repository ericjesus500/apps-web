<?php 

    class BD {
        public static $instancia=null;
        public static function crearInstancia()
        {
            if (!isset(self::$instancia)) {
                $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instancia = new PDO('mysql:host=127.0.0.1:3306;dbname=develoteca_app_alumnos', 'admin', 'admin', $opciones);
                //echo "conectado...";
            }
            return self::$instancia;
        }
    }

?>