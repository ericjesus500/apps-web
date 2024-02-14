<?php 

  if ($_POST) {
    require "../../../../config/conexion.php";

    $id = isset($_POST['tecno_id']) ? mysqli_real_escape_string($mysqli, $_POST['tecno_id']) : "";

    if ($id != "") {
      echo $id;
    } else {
      echo "no hay data";
    }
  }


?>