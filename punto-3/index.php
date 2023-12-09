<?php

  // DEFINICION DE DATOS DE ENTRADA
  $firstNumber = 0;
  $secondNumber = 0;

  // DEFINICION DEL PROCESO
  echo "Digite el primer numero que desea sumar: \n";
  $firstNumber = readline();
  echo "Digite el segundo numero que desea sumar: \n";
  $secondNumber = readline();

  // SALIDAS
  $result = $firstNumber + $secondNumber;
  echo "El resultado es: \n";
  echo $result;

?>