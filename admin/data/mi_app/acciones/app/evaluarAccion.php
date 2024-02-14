<?php 

  if (isset($_POST)) {    
    require "../../../../config/conexion.php";
    
    $appNombre = isset($_POST['app_nombre']) ? mysqli_real_escape_string($mysqli, $_POST['app_nombre']) : "";
    $appTecno = isset($_POST['app_tecno']) ? mysqli_real_escape_string($mysqli, $_POST['app_tecno']) : "";
    $appAutor = isset($_POST['app_autor']) ? mysqli_real_escape_string($mysqli, $_POST['app_autor']) : "";
    $appUrl = isset($_POST['app_url']) ? mysqli_real_escape_string($mysqli, $_POST['app_url']) : "";
    $appDescripcion = isset($_POST['app_descripcion']) ? mysqli_real_escape_string($mysqli, $_POST['app_descripcion']) : "";
    $btnValue = isset($_POST['btnValue']) ? mysqli_real_escape_string($mysqli, $_POST['btnValue']) : "";
    
    if ($appNombre != "" && $btnValue != "") {

      switch ($btnValue) {
        case 'Agregar':
          mysqli_set_charset($mysqli, "utf8");
            
          $query = "INSERT INTO aplicacion(app_nombre, app_tecno, app_autor, app_url, app_descripcion) VALUES(?,?,?,?,?)";
          $stmt = mysqli_prepare($mysqli, $query);
          mysqli_stmt_bind_param($stmt, "sssss", $appNombre, $appTecno, $appAutor, $appUrl, $appDescripcion);

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
            $id = isset($_POST['appId']) ? mysqli_real_escape_string($mysqli, $_POST['appId']) : "" ;
            $appNombre = isset($_POST['app_nombre']) ? mysqli_real_escape_string($mysqli, $_POST['app_nombre']) : "";
            //echo $id;
            $query = "UPDATE aplicacion SET app_nombre=?, app_tecno=?, app_autor=?, app_url=?, app_descripcion=? WHERE app_id = ?";
    
            $stmt = mysqli_prepare($mysqli, $query);

            mysqli_stmt_bind_param($stmt, "ssssss", $appNombre, $appTecno, $appAutor, $appUrl, $appDescripcion, $id);

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