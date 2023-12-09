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

  if (strtoupper($membershipType) == "A" || strtoupper($membershipType) == "B") {
  $totalPrice = $totalPrice * 0.7;
  }

  echo "El total a pagar es: $" . number_format($totalPrice);
  
?>