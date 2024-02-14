<?php 

  if (isset($_POST)) {    
    require "../../../../config/conexion.php";
    
    $videoTitulo = isset($_POST['video_titulo']) ? mysqli_real_escape_string($mysqli, $_POST['video_titulo']) : "";
    $nombreLista = isset($_POST['video_nombre_lista']) ? mysqli_real_escape_string($mysqli, $_POST['video_nombre_lista']) : "";
    $videoUrl = isset($_POST['video_url']) ? mysqli_real_escape_string($mysqli, $_POST['video_url']) : "";
    $videoWeb = isset($_POST['video_web']) ? mysqli_real_escape_string($mysqli, $_POST['video_web']) : "";
    $videoAutor = isset($_POST['video_autor']) ? mysqli_real_escape_string($mysqli, $_POST['video_autor']) : "";
    $videoTecno = isset($_POST['video_tecno']) ? mysqli_real_escape_string($mysqli, $_POST['video_tecno']) : "";
    $videoOrigen = isset($_POST['video_origen']) ? mysqli_real_escape_string($mysqli, $_POST['video_origen']) : "";
    $videoTipo = isset($_POST['video_tipo']) ? mysqli_real_escape_string($mysqli, $_POST['video_tipo']) : "";
    $videoEstado = isset($_POST['video_estado']) ? mysqli_real_escape_string($mysqli, $_POST['video_estado']) : "";
    $btnValue = isset($_POST['btnValue']) ? mysqli_real_escape_string($mysqli, $_POST['btnValue']) : "";

    // echo "Titulo: ".$videoTitulo."<br />";
    // echo "Url: ".$videoUrl."<br />";
    // echo "Web: ".$videoWeb."<br />";
    // echo "Autor: ".$videoAutor."<br />";
    // echo "Tecnologia: ".$videoTecno."<br />";
    // echo "Origen: ".$videoOrigen."<br />";
    // echo "Tipo: ".$videoTipo."<br />";
    // echo "Estado: ".$videoEstado."<br />";
    
    
    if ($videoTitulo != "" && $btnValue != "") {
      
      switch ($btnValue) {
        case 'Agregar':
          mysqli_set_charset($mysqli, "utf8");
            
          $query = "INSERT INTO videos(video_titulo, video_nombre_lista, video_url, video_web, video_autor_id, video_tecno_id, video_origen_id, video_tipo_id, video_estado_id) VALUES(?,?,?,?,?,?,?,?,?)";
          $stmt = mysqli_prepare($mysqli, $query);
          mysqli_stmt_bind_param($stmt, "sssssssss", $videoTitulo, $nombreLista, $videoUrl, $videoWeb, $videoAutor, $videoTecno, $videoOrigen, $videoTipo, $videoEstado);

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
            $id = isset($_POST['video_id']) ? mysqli_real_escape_string($mysqli, $_POST['video_id']) : "" ;
            $videoTitulo = isset($_POST['video_titulo']) ? mysqli_real_escape_string($mysqli, $_POST['video_titulo']) : "";
            $nombreLista = isset($_POST['video_nombre_lista']) ? mysqli_real_escape_string($mysqli, $_POST['video_nombre_lista']) : "";
            $videoUrl = isset($_POST['video_url']) ? mysqli_real_escape_string($mysqli, $_POST['video_url']) : "";
            $videoWeb = isset($_POST['video_web']) ? mysqli_real_escape_string($mysqli, $_POST['video_web']) : "";
            $videoAutor = isset($_POST['video_autor']) ? mysqli_real_escape_string($mysqli, $_POST['video_autor']) : "";
            $videoTecno = isset($_POST['video_tecno']) ? mysqli_real_escape_string($mysqli, $_POST['video_tecno']) : "";
            $videoOrigen = isset($_POST['video_origen']) ? mysqli_real_escape_string($mysqli, $_POST['video_origen']) : "";
            $videoTipo = isset($_POST['video_tipo']) ? mysqli_real_escape_string($mysqli, $_POST['video_tipo']) : "";
            $videoEstado = isset($_POST['video_estado']) ? mysqli_real_escape_string($mysqli, $_POST['video_estado']) : "";
            //echo $id;

            $query = "UPDATE videos SET video_titulo=?, video_nombre_lista=?, video_url=?, video_web=?, video_autor_id=?, video_tecno_id=?, video_origen_id=?, video_tipo_id=?, video_estado_id=? WHERE video_id = ?";
    
            $stmt = mysqli_prepare($mysqli, $query);

            mysqli_stmt_bind_param($stmt, "ssssssssss", $videoTitulo, $nombreLista, $videoUrl, $videoWeb, $videoAutor, $videoTecno, $videoOrigen, $videoTipo, $videoEstado, $id);

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