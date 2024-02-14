<?php 

  if (isset($_POST)) {    
    require "../../../../config/conexion.php";
    
    $tecnoNombre = isset($_POST['tecno_nombre']) ? mysqli_real_escape_string($mysqli, $_POST['tecno_nombre']) : "";
    $file = isset($_FILES['tecno_file']) ? $_FILES['tecno_file'] : "";
    $btnValue = isset($_POST['btnValue']) ? mysqli_real_escape_string($mysqli, $_POST['btnValue']) : "";
    
    if ($tecnoNombre != "" && $btnValue != "") {

      if ($file != "") {

        $nombre = $_FILES['tecno_file']['name'];
        $tipo = $_FILES['tecno_file']['type'];
        $tamano = $_FILES['tecno_file']['size'];
        $temporal = $_FILES['tecno_file']['tmp_name'];
        $error = $_FILES['tecno_file']['error'];

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
                $directorioDestino = './logos/';
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
            
          $query = "INSERT INTO tecnologia(tecno_nombre, tecno_file) VALUES(?,?)";
          $stmt = mysqli_prepare($mysqli, $query);
          mysqli_stmt_bind_param($stmt, "ss", $tecnoNombre, $nombre);

          if (mysqli_stmt_execute($stmt)) {
              echo "Inserción exitosa";
          } else {
              echo "Inserción fallida";
          }
          mysqli_stmt_free_result($stmt);
          mysqli_stmt_close($stmt);
          mysqli_close($mysqli);
            
          break;
        
          case 'Modificar':
            $id = isset($_POST['tecnoId']) ? mysqli_real_escape_string($mysqli, $_POST['tecnoId']) : "" ;
            $tecnoNombre = isset($_POST['tecno_nombre']) ? mysqli_real_escape_string($mysqli, $_POST['tecno_nombre']) : "";
            //echo $id;
            $query = "UPDATE tecnologia SET tecno_nombre=?, tecno_file=? WHERE tecno_id = ?";
    
            $stmt = mysqli_prepare($mysqli, $query);

            mysqli_stmt_bind_param($stmt, "sss", $tecnoNombre, $nombre, $id);

            if (mysqli_stmt_execute($stmt)) {
              if (mysqli_affected_rows($mysqli)> 0) {
                echo "Actualización exitosa";
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