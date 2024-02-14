<?php 

    include "../../../../config/conexion.php";
    
    $columns = ['app_id', 'app_nombre', 'app_tecno', 'app_autor', 'app_url', 'app_descripcion'];
	  $table = "aplicacion";
	  $id = 'app_id';


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
      $query = "SELECT SQL_CALC_FOUND_ROWS " . implode(", ", $columns) . " FROM $table $sLimit";
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
           $output['data'] .= '<td class="td-border">'.$row['app_id'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['app_nombre'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['app_tecno'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['app_autor'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['app_url'].'</td>'; 
           $output['data'] .= '<td class="td-border">'.$row['app_descripcion'].'</td>';
           $output['data'] .= '<td class="text-center">'.'<button class="btn p-0 mx-2 seleccionar" type="button" value="seleccionar" name="accionBtnTable" >
           <span class="h5"><i class="bi bi-check2-square text-skyblue_2"></i></span>
           </button>
           <button class="btn p-0 eliminar" type="button" value="eliminar" name="accionBtnTable"><span class="h5"><i class="bi bi-trash-fill text-yellow"></i></span>
           </button>'.'</td>';
           $output['data'] .= '</tr>';
         }
       } else {
         $output['data'] .= '<tr>';
         $output['data'] .= '<td colspan="6">Sin resultados</td>';
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
             $output['paginacion'] .= '<li class="page-item"><a class="page-link" href="#" onclick="getDataApp('. $i .')">' . $i .'</a></li>';
           }
         }

         $output['paginacion'] .= '</ul>';
         $output['paginacion'] .= '</nav>';
      }

		echo json_encode($output, JSON_UNESCAPED_UNICODE);
    mysqli_free_result($result);

?>