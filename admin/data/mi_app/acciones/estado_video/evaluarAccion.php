<?php 

  if (isset($_POST)) {    
    require "../../../../config/conexion.php";
    
    $estadoNombre = isset($_POST['estado_nombre']) ? mysqli_real_escape_string($mysqli, $_POST['estado_nombre']) : "";
    $btnValue = isset($_POST['btnValue']) ? mysqli_real_escape_string($mysqli, $_POST['btnValue']) : "";
    if ($estadoNombre != "" && $btnValue != "") {
      //echo $estadoNombre."</br>";
      //echo $btnValue."</br>";

      switch ($btnValue) {
        case 'Agregar':          
          mysqli_set_charset($mysqli, "utf8");
            
          $query = "INSERT INTO estado_video(estado_nombre) VALUES(?)";
          $stmt = mysqli_prepare($mysqli, $query);
          mysqli_stmt_bind_param($stmt, "s", $estadoNombre);

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
            $id = isset($_POST['estadoId']) ? mysqli_real_escape_string($mysqli, $_POST['estadoId']) : "" ;
            $estadoNombre = isset($_POST['estado_nombre']) ? mysqli_real_escape_string($mysqli, $_POST['estado_nombre']) : "";
            //echo $id;
            $query = "UPDATE estado_video SET estado_nombre=? WHERE estado_id = ?";
    
            $stmt = mysqli_prepare($mysqli, $query);

            mysqli_stmt_bind_param($stmt, "ss", $estadoNombre, $id);

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