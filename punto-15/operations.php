<?php
  
  function sumar($num1, $num2) {
      return $num1 + $num2;
  }
  
  function restar($num1, $num2) {
      return $num1 - $num2;
  }
  
  function multiplicar($num1, $num2) {
      return $num1 * $num2;
  }
  
  function dividir($num1, $num2) {
      if ($num2 != 0) {
          return $num1 / $num2;
      } else {
          return "Error: No se puede dividir por cero.";
      }
  }
  
?>