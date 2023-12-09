<?php

// DATOS DE ENTRADA
$name = "";
$age = 0;

// INGRESAR DE DATOS
echo "Introduzca su nombre: ";
$name = readline();

echo "Introduzca su edad: ";
$age = readline();

// PROCESO
if ($age >= 18) {
    $message = "Bienvenido, $name eres mayor de edad";
} else {
    $message = "$name no eres mayor de edad";
}

// SALIDA
echo $message;

?>