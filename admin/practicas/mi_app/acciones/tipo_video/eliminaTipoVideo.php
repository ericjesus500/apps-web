<?php 

  if (isset($_POST['tipo_video_id'])) {
    include "../../../../config/conexion.php";
    $id = isset($_POST['tipo_video_id']) ? mysqli_real_escape_string($mysqli, $_POST['tipo_video_id']) : "";
    //echo $id;

    if ($id !="") {
      $query = "DELETE FROM tipo_video WHERE tipo_video_id = ?";
      $stmt = mysqli_prepare($mysqli, $query);
      mysqli_stmt_bind_param($stmt, "s", $id);
  
      if (mysqli_stmt_execute($stmt)) {
        if (mysqli_affected_rows($mysqli)> 0) {
           echo "Registro eliminado";
        } else {
           echo "Registro ya está eliminado, No se puede volver a eliminar";
        }
     } else {
        echo "Eliminación del registro falló" . mysqli_error($mysqli);
     }
  
     mysqli_stmt_close($stmt);
     mysqli_close($mysqli);
    }
  } else {
    echo "Envie un ID correcto";
  }

?>