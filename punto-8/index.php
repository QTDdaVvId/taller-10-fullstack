<?php

  //CREACION DE VARIABLES
  $membershipType = "";
  $personNumber = 0;
  const TICKET_PRICE = 25000;
  
  //PROCESO 
  echo "Digite el numero de personas que entraran a jugar: \n";
  $personNumber = readline();
  
  echo "Digite su tipo de membresia: \n";
  $membershipType = readline();
  
  $totalPrice = $personNumber * TICKET_PRICE;
  
  switch (strtoupper($membershipType)) {
    case "A":
      $totalPrice = $totalPrice * 0.5;
    break;
    
    case "B":
      $totalPrice = $totalPrice * 0.6;
    break;
    
    case "C":
    $totalPrice = $totalPrice * 0.7;
    break;
    
    case "D":
    $totalPrice = $totalPrice * 0.8;
    break;

    case "E":
    $totalPrice = $totalPrice * 0.9;
    break;

    case "F":
    $totalPrice = $totalPrice * 0.95;
    break;
    default:
  }
  echo "El total a pagar es: $" . number_format($totalPrice);

?>