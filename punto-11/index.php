<?php

  //CREACION DE DATOS DE ENTRADA

  $i = 1; // contador
  $sum = 0; // acumulador

  //PROCESO

  while ($i <= 100) {
    echo $i . "\n";
    $sum = $sum + $i;
    $i = $i + 2;
  }

  echo "La suma es: " . $sum;

?>