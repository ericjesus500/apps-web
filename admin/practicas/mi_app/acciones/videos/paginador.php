<?php 

    include "../../../../config/conexion.php";
    
	  $table = "videos";
	  $id = 'video_id';

    $limit = isset($_POST['registros']) ? mysqli_real_escape_string($mysqli, $_POST['registros']) : 10;
    $pagina = isset($_POST['pagina']) ? mysqli_real_escape_string($mysqli, $_POST['pagina']) : 0;

     if (!$pagina) {
      $inicio = 0;
      $pagina = 1;
    } else {
      $inicio = ($pagina - 1) * $limit;
    }

    $sLimit = "LIMIT $inicio, $limit";

    //OBTENER EL NUMERO TOTAL DE REGISTROS
    $query = "SELECT SQL_CALC_FOUND_ROWS videos.video_id, videos.video_titulo, videos.video_nombre_lista as lista, videos.video_url, videos.video_web, tecnologia.tecno_nombre as tecnologia, autor.autor_nombre as autor, origen_video.origen_nombre as origen, tipo_video.tipo_video_nombre as tipo, estado_video.estado_nombre as estado
    FROM $table 
    INNER JOIN tecnologia
    ON videos.video_tecno_id = tecnologia.tecno_id
    INNER JOIN autor
    ON videos.video_autor_id = autor.autor_id
    INNER JOIN origen_video
    ON videos.video_origen_id = origen_video.origen_id
    INNER JOIN tipo_video
    ON videos.video_tipo_id = tipo_video.tipo_video_id
    INNER JOIN estado_video
    ON videos.video_estado_id = estado_video.estado_id $sLimit";
     
      // $query = "SELECT SQL_CALC_FOUND_ROWS " . implode(", ", $columns) . " FROM $table $sLimit";
      $result = mysqli_query($mysqli, $query);//rpta -> 10 primeras filas
   
       if (!$result) {
         throw new Exception("Error en la consulta: " . mysqli_error($mysqli));
       }

      $num_rows = mysqli_num_rows($result);//10

      /*CONSULTA PARA TOTAL DE REGISTROS FILTRADOS*/
       $sqlFiltro = "SELECT FOUND_ROWS()";
		   $resFiltro = mysqli_query($mysqli, $sqlFiltro);
		   $row_filtro = mysqli_fetch_array($resFiltro);
		   $totalFiltro = $row_filtro[0];//23
       
		   $sqlTotal = "SELECT count($id) FROM $table";
		   $resTotal = mysqli_query($mysqli, $sqlTotal);
		   $row_total = mysqli_fetch_array($resTotal);
		   $totalRegistros = $row_total[0];//23

       /*MOSTRANDO RESULTADOS*/
       $output = [];
       $output['totalRegistros'] = $totalRegistros;
       $output['totalFiltro'] = $totalFiltro;
       //$output['totalFilas'] = $num_rows;//10
       //$output['pagInicial'] = $pagina;//1
       //$output['limitInicial'] = $limit;//10,25,50
       
       $output['data'] = '';
       $output['paginacion'] = '';
       
       if ($num_rows > 0) {
         while ($row = mysqli_fetch_assoc($result)) {
           $output['data'] .= '<tr class="fila">';
           $output['data'] .= '<td class="td-border">'.$row['video_id'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['video_titulo'].'</td>';
           $output['data'] .= '<td class="td-border">'.'<a class="text-amarillo" target="_blank" href="' . $row['video_url'] . '">' .$row['video_url'] . '</a>'.'</td>'; 
           $output['data'] .= '<td class="td-border">'.'<a class="text-amarillo" target="_blank" href="' . $row['video_web'] . '">' .$row['video_web'] . '</a>'.'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['autor'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['tecnologia'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['origen'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['tipo'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['lista'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['estado'].'</td>';
           $output['data'] .= '<td class="text-center">'.'<button class="btn p-0 mx-2 seleccionar" type="button" value="seleccionar" name="accionBtnTable" >
           <span class="h4"><i class="bi bi-check2-square text-skyblue_2"></i></span>
           </button>
           <button class="btn p-0 eliminar" type="button" value="eliminar" name="accionBtnTable"><span class="h4"><i class="bi bi-trash-fill text-yellow"></i></span>
           </button>'.'</td>';
           $output['data'] .= '</tr>';
         }
       } else {
         $output['data'] .= '<tr>';
         $output['data'] .= '<td colspan="8">Sin resultados</td>';
         $output['data'] .= '</tr>';
       }

        if ($output['totalRegistros'] > 0) {
         $totalPaginas = ceil($output['totalRegistros'] / $limit);//23

         $output['paginacion'] .= '<nav>';
         $output['paginacion'] .= '<ul class="pagination">';

         $numeroInicio = 1;
         
         if (($pagina - 4) > 1) {
           $numeroInicio = $pagina - 4;
         }

         $numeroFin = $numeroInicio + 9;
         if ($numeroFin > $totalPaginas) {
           $numeroFin = $totalPaginas;
         }

         for ($i=$numeroInicio; $i <= $numeroFin ; $i++) {
           if ($pagina == $i) {
             $output['paginacion'] .= '<li class="page-item"><a class="page-link active" href="#">' . $i .'</a></li>';
           } else {
             $output['paginacion'] .= '<li class="page-item"><a class="page-link" href="#" onclick="getDataVideo('. $i .')">' . $i .'</a></li>';
           }
         }

         $output['paginacion'] .= '</ul>';
         $output['paginacion'] .= '</nav>';
      }

		echo json_encode($output, JSON_UNESCAPED_UNICODE);
    mysqli_free_result($result);

?>