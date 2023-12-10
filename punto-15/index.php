<?php
  
  include 'operations.php';
  
  // USUARIO INGRESA DATOS
  echo "Ingrese el primer número: ";
  $number1 = readline();
  echo "Ingrese el segundo número: ";
  $number2 = readline();
  echo "Ingrese la operación (sumar, restar, multiplicar, dividir): ";
  $operation = readline();
  
  // OPERACIONES SEGUN ENTRADA DE USUARIO
  switch ($operation) {
      case 'sumar':
          $result = sumar($number1, $number2);
          break;
      case 'restar':
          $result = restar($number1, $number2);
          break;
      case 'multiplicar':
          $result = multiplicar($number1, $number2);
          break;
      case 'dividir':
          $result = dividir($number1, $number2);
          break;
      default:
          $result = "Error: Operación no válida.";
          break;
  }
  
  // SALIDA
  echo "El resultado de la operación es: $result";
  
?>