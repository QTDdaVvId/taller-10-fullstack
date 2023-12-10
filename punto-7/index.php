<?php

  //DECLARACION DE DATOS GLOBALES

  $continue = true;

  do {
    //CREACION DE DATOS DE ENTRADA
  
    $option = 0;
    $firstNumber = 0;
    $secondNumber = 0;
    $result = 0;
  
  //PROCESO
  
    echo "Digite el primer numero a operar: \n";
    $firstNumber = readline();
    
    echo "Digite el segundo numero a operar \n";
    $secondNumber = readline();
    
    echo "Digite la operacion a realizar \n";
    echo "1 - Suma \n";
    echo "2 - Resta \n";
    echo "3 - Multiplicacion \n";
    echo "4 - Division \n";
  
    $option = readline();
  
    switch ($option) {
      case 1:
      $result = $firstNumber + $secondNumber;
      break;
      case 2:  
      $result = $firstNumber - $secondNumber;
      break;
      case 3:
      $result = $firstNumber * $secondNumber;
      break;
      case 4:
      $result = $firstNumber / $secondNumber;
      break;
    default:
      echo "Opcion no valida \n";
    }
  
    echo "El resultado de la operacion es: $result \n";

    echo "Desea realizar otra operacion?: \n";
    echo "1 = SI \n";
    echo "0 = NO \n";

    $continue = readline();
  
  } while ($continue);
  
?>