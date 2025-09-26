<?php 

  $a_bool = true; // un valor booleano
  $a_str = "foo"; // una cadena de caracteres
  $a_str2 = 'foo'; // una cadena de caracteres
  $an_int = 12; // un número entero

  echo get_debug_type($a_bool) . "<br />";
  echo get_debug_type($a_str) . "<br />";

  // Si este valor es un entero, incrementarlo en cuatro
  if (is_int($an_int)) {
    $an_int += 4;
    echo $an_int . "<br/>";
  }

  // Si $a_bool es una cadena, imprimirla
  // (no imprime nada)
  if (is_string($a_bool)) {
    echo "Cadena: $a_bool <br />";
  }else{
    echo $a_bool .  " No es una cadena";
  }

?>