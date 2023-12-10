<?php

  include "./passwordCheker.php";
  
  // LLAMAR FUNCION
  echo "Ingrese la contraseña que desea crear:" . "\n";
  $word = readline();
  
  if (isSecure($word)) {
      echo "La contraseña es segura.";
  } else {
      echo "La contraseña no cumple con los criterios de seguridad.";
  }
  
?>