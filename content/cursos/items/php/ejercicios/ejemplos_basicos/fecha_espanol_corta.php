<?php 

date_default_timezone_set("America/Lima");

function fecha_espanol_corta($fecha = ""){
   if($fecha == ""){
      $fecha = date("d-m-Y");
   } else {
      $fecha = date("d-m-Y", strtotime($fecha));
   }

   $fecha = explode("-", $fecha);

   $fecha_dia = $fecha[0];
   $fecha_mes = $fecha[1];
   $fecha_year = $fecha[2];

   $mes_year = [
      "01" => "Enero",
      "02" => "Febrero",
      "03" =>"Marzo",
      "04" => "Abril",
      "05" => "Mayo",
      "06" => "Junio",
      "07" => "Julio",
      "08" => "Agosto",
      "09" => "Setiembre",
      "10" => "Octubre",
      "11" => "Noviembre",
      "12" => "Diciembre"
   ];

   $fecha_final = $fecha_dia." de ".$mes_year[$fecha_mes]." de ".$fecha_year;

   return $fecha_final;
}

echo "Fecha Corta Sin Parámetro"."<br />";
echo fecha_espanol_corta();
echo "<br />";
echo "===========================================<br />";
echo "Fecha Corta Con Parámetro"."<br />";
echo fecha_espanol_corta("01-01-2020")."<br />";
echo fecha_espanol_corta("01/01/2020")."<br />";
echo fecha_espanol_corta("2021/06/21")."<br />";
echo fecha_espanol_corta(date("d-m-Y"))."<br />";

$fecha_prueba = date("d-m-Y");
echo fecha_espanol_corta($fecha_prueba)."<br />";

$fecha_otra_prueba = "15-02-1973";
echo fecha_espanol_corta($fecha_otra_prueba)."<br />";

?>