<?php
  // DECLARACION DE DATOS DE ENTRADA
  $number = 0;
  $i = 0;

  //PROCESO
  echo "Digite el numero que desea multiplicar: \n";
  $number = readline();

  while($i <= 30) {
    $result = $number * $i;
    echo $number . " x " . $i . " = " . $result . "\n";
    $i++;
  }

?> 