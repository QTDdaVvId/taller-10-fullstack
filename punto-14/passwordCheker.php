<?php

function isSecure($word) {
    // LONGITUD
    if (strlen($word) < 8) {
        return false;
    }

    // LETRA MAYUSCULA
    if (!preg_match('/[A-Z]/', $word)) {
        return false;
    }

    // AL MENOS UN NUMERO
    if (!preg_match('/[0-9]/', $word)) {
        return false;
    }

    // PASA TODAS LAS VALIDACIONES
    return true;
}

?>