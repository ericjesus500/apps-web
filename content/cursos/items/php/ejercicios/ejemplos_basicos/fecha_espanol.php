<?php 

	date_default_timezone_set("America/Lima");

	function fecha_espanol_larga(){
	   $fecha_dia = date("d");
	   $fecha_mes = date("m");
	   $fecha_year = date("Y");

	   $dia_semana = [
	      "Monday" => "Lunes",
	      "Tuesday" => "Martes",
	      "Wednesday" =>"Miercoles",
	      "Thursday" => "Jueves",
	      "Friday" => "Viernes",
	      "Saturday" => "Sabado",
	      "Sunday" => "Domingo"
	   ];

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
	      "12" => "Diciembre",
	   ];

	   $fecha_final = $dia_semana[date("l")]." ".$fecha_dia." de ".$mes_year[$fecha_mes]." de ".$fecha_year;

	   return $fecha_final;
	}

	echo "Fecha Función Larga"."<br />";
	echo fecha_espanol_larga();	
	?>