<?php

  // DATOS DE ENTRADA
  echo "Ingrese un número: ";
  $number = readline();

  // PROCESO 
  echo "Tabla de Multiplicar del " . $number . ":" . "\n";

  for ($i = 0; $i <= 30; $i++) {
      $result = $number * $i;
      echo "$i x $number = $result" . "\n";
      }

?>