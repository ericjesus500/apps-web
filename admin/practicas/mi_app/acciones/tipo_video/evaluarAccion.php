<?php 

  if (isset($_POST)) {    
    require "../../../../config/conexion.php";
    
    $tipoNombre = isset($_POST['tipo_video_nombre']) ? mysqli_real_escape_string($mysqli, $_POST['tipo_video_nombre']) : "";
    $btnValue = isset($_POST['btnValue']) ? mysqli_real_escape_string($mysqli, $_POST['btnValue']) : "";
    if ($tipoNombre != "" && $btnValue != "") {
      //echo $tipoNombre."</br>";
      //echo $btnValue."</br>";

      switch ($btnValue) {
        case 'Agregar':
          mysqli_set_charset($mysqli, "utf8");
            
          $query = "INSERT INTO tipo_video(tipo_video_nombre) VALUES(?)";
          $stmt = mysqli_prepare($mysqli, $query);
          mysqli_stmt_bind_param($stmt, "s", $tipoNombre);

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
            $id = isset($_POST['tipoId']) ? mysqli_real_escape_string($mysqli, $_POST['tipoId']) : "" ;
            $tipoNombre = isset($_POST['tipo_video_nombre']) ? mysqli_real_escape_string($mysqli, $_POST['tipo_video_nombre']) : "";
            //echo $id;
            $query = "UPDATE tipo_video SET tipo_video_nombre=? WHERE tipo_video_id = ?";
    
            $stmt = mysqli_prepare($mysqli, $query);

            mysqli_stmt_bind_param($stmt, "ss", $tipoNombre, $id);

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