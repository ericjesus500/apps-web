<?php 

  if (isset($_POST)) {    
    require "../../../../config/conexion.php";
    
    $guiaTitulo = isset($_POST['guia_titulo']) ? mysqli_real_escape_string($mysqli, $_POST['guia_titulo']) : "";
    $guiaHref = isset($_POST['guia_href']) ? mysqli_real_escape_string($mysqli, $_POST['guia_href']) : "";
    $guiaHrefLocal = isset($_POST['guia_href_local']) ? mysqli_real_escape_string($mysqli, $_POST['guia_href_local']) : "";
    $guiaCategoria = isset($_POST['guia_categoria']) ? mysqli_real_escape_string($mysqli, $_POST['guia_categoria']) : "";
    $guiaAutor = isset($_POST['guia_autor']) ? mysqli_real_escape_string($mysqli, $_POST['guia_autor']) : "";
    $btnValue = isset($_POST['btnValue']) ? mysqli_real_escape_string($mysqli, $_POST['btnValue']) : "";
    
    if ($guiaTitulo != "" && $btnValue != "") {
      
      switch ($btnValue) {
        case 'Agregar':
          mysqli_set_charset($mysqli, "utf8");
            
          $query = "INSERT INTO guia(guia_titulo, guia_href, guia_href_local, guia_categoria, guia_autor) VALUES(?,?,?,?,?)";
          $stmt = mysqli_prepare($mysqli, $query);
          mysqli_stmt_bind_param($stmt, "sssss", $guiaTitulo, $guiaHref, $guiaHrefLocal, $guiaCategoria, $guiaAutor);

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
            $id = isset($_POST['guiaId']) ? mysqli_real_escape_string($mysqli, $_POST['guiaId']) : "" ;
            //echo $id;
            $query = "UPDATE guia SET guia_titulo=?, guia_href=?, guia_href_local=?, guia_categoria=?, guia_autor=? WHERE guia_id = ?";
    
            $stmt = mysqli_prepare($mysqli, $query);

            mysqli_stmt_bind_param($stmt, "ssssss", $guiaTitulo, $guiaHref, $guiaHrefLocal, $guiaCategoria, $guiaAutor, $id);

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