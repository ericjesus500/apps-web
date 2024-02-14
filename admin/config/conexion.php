<?php

  $server_name="127.0.0.1:3306";
  $server_user="admin";
  $passw="admin";
  $bd="codigos";

   try{
    
    $mysqli = mysqli_init();
    if (!$mysqli) {    
      throw new Exception("Error al iniciar la conexión a la BD " . mysqli_connect_errno());
    }

    if (!mysqli_real_connect($mysqli, $server_name, $server_user, $passw, $bd)) {      
      throw new Exception("Error al conectarse a la BD " . mysqli_connect_error());
    }

    //echo "Conexión exitosa";

    } catch (Exception $e) {  
      echo "Error en la consulta" . $e->getMessage(); 
  } 

?>