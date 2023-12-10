<?php

// DATOS DE ENTRADA
$arrayNumber = [4, 7, 2, 9, 5];
$sum = 0;

// PROCESO
foreach ($arrayNumber as $number) {
    $sum += $number;
}

// SALIDA
echo "La suma de los números en el arreglo es: $sum";

?>