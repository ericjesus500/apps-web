<?php 

  if (isset($_POST)) {    
    require "../../../../config/conexion.php";
    
    $autorNombre = isset($_POST['autor_nombre']) ? mysqli_real_escape_string($mysqli, $_POST['autor_nombre']) : "";
    $autorCanal = isset($_POST['autor_canal']) ? mysqli_real_escape_string($mysqli, $_POST['autor_canal']) : "";
    $autorUrl = isset($_POST['autor_url']) ? mysqli_real_escape_string($mysqli, $_POST['autor_url']) : "";
    $autorWeb = isset($_POST['autor_web']) ? mysqli_real_escape_string($mysqli, $_POST['autor_web']) : "";
    $autorTwitter = isset($_POST['autor_twitter']) ? mysqli_real_escape_string($mysqli, $_POST['autor_twitter']) : "";
    $autorFacebook = isset($_POST['autor_facebook']) ? mysqli_real_escape_string($mysqli, $_POST['autor_facebook']) : "";
    $autorTwitch = isset($_POST['autor_twitch']) ? mysqli_real_escape_string($mysqli, $_POST['autor_twitch']) : "";
    $autorDiscord = isset($_POST['autor_discord']) ? mysqli_real_escape_string($mysqli, $_POST['autor_discord']) : "";    
    $autorFile = isset($_FILES['autor_file']) ? $_FILES['autor_file'] : "";
    $btnValue = isset($_POST['btnValue']) ? mysqli_real_escape_string($mysqli, $_POST['btnValue']) : "";
    
    if ($autorNombre != "" && $btnValue != "") {

      if ($autorFile != "") {

        $nombre = $_FILES['autor_file']['name'];
        $tipo = $_FILES['autor_file']['type'];
        $tamano = $_FILES['autor_file']['size'];
        $temporal = $_FILES['autor_file']['tmp_name'];
        $error = $_FILES['autor_file']['error'];

        //echo $tecnoNombre."</br>";
        //echo $btnValue."</br>";
        // print_r($file);        
        // echo $nombre."<br />";
        // echo $tipo."<br />";
        // echo $tamano."<br />";
        // echo $temporal."<br />";
        // echo $error."<br />";

        if (isset($nombre) && $error == 0) {
            // Tamaño máximo permitido en bytes (2 MB)
            $tamanoMaximo = 2 * 1024 * 1024;
        
            // Tipos de archivo permitidos (jpg y png)
            $tiposPermitidos = ['image/jpeg', 'image/png'];
        
            // Validar tamaño y tipo del archivo
            if ($tamano <= $tamanoMaximo && in_array($tipo, $tiposPermitidos)) {
                $directorioDestino = './img_autores/';
                $ubicacionFinal = $directorioDestino . basename($nombre);
                if (move_uploaded_file($temporal, $ubicacionFinal)) {
                    echo "El archivo se ha subido correctamente.";
                } else {
                    echo "Error al mover el archivo.";
                }
                
            } else {
                echo "El archivo no cumple con los requisitos de tamaño o tipo.";
            }
        } else {
            echo "Error al subir el archivo.";
        }
      }

      switch ($btnValue) {
        case 'Agregar':
          mysqli_set_charset($mysqli, "utf8");
            
          $query = "INSERT INTO autor(autor_nombre, autor_canal, autor_url, autor_web, autor_twitter, autor_facebook, autor_twitch, autor_discord, autor_file) VALUES(?,?,?,?,?,?,?,?,?)";
          $stmt = mysqli_prepare($mysqli, $query);
          mysqli_stmt_bind_param($stmt, "sssssssss", $autorNombre, $autorCanal, $autorUrl, $autorWeb, $autorTwitter, $autorFacebook, $autorTwitch, $autorDiscord, $nombre);

          if (mysqli_stmt_execute($stmt)) {
              echo "Grabación exitosa";
          } else {
              echo "Grabación fallida";
          }
          mysqli_stmt_free_result($stmt);
          mysqli_stmt_close($stmt);
          mysqli_close($mysqli);
            
          break;
        
          case 'Modificar':
            $id = isset($_POST['autorId']) ? mysqli_real_escape_string($mysqli, $_POST['autorId']) : "" ;
            $autorNombre = isset($_POST['autor_nombre']) ? mysqli_real_escape_string($mysqli, $_POST['autor_nombre']) : "";
            //echo $id;
            $query = "UPDATE autor SET autor_nombre=?, autor_canal=?, autor_url=?, autor_web=?, autor_twitter=?, autor_facebook=?, autor_twitch=?, autor_discord=?, autor_file=? WHERE autor_id = ?";
    
            $stmt = mysqli_prepare($mysqli, $query);

            mysqli_stmt_bind_param($stmt, "ssssssssss", $autorNombre, $autorCanal, $autorUrl, $autorWeb, $autorTwitter, $autorFacebook, $autorTwitch, $autorDiscord, $nombre, $id);

            if (mysqli_stmt_execute($stmt)) {
              if (mysqli_affected_rows($mysqli)> 0) {
                echo "Grabación exitosa";
              } else {
                echo "Registro ya actualizado, No se puede volver a actualizar";
              }
            } else {
                echo "La actualización a fallado" . mysqli_error($mysqli);
            }
            mysqli_stmt_free_result($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($mysqli);
        
          default:
            break;
      }
    }
  } else {
    echo "NO HAY DATA";
  }

?>