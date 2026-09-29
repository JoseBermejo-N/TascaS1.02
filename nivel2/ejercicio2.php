<?php


function validarPuntuacion ($puntuacion) {
    if ($puntuacion < 0 || $puntuacion > 9999) {
        return false;
    } else {
        return true;
    }
}

function sumaPuntuaciones ($punt1, $punt2, $punt3) {
    $suma = $punt1 + $punt2 + $punt3;
    return $suma;
}

function calcularMedia ($punt1, $punt2, $punt3) {
    $media = sumaPuntuaciones($punt1, $punt2, $punt3) / 3;
    return $media;
}

function clasificacion ($puntuacionTotal) {
    if ($puntuacionTotal < 4000) {
        return "Principiante";
    } elseif ($puntuacionTotal < 8000) {
        return "Intermedio";
    } else {
        return "Experto";
    }
}


//testeamos funciones
$punt1 = 2000;
$punt2 = 3500;
$punt3 = 5750;

if (validarPuntuacion($punt1) && validarPuntuacion($punt2) && validarPuntuacion($punt3)) {
    $suma = sumaPuntuaciones($punt1, $punt2, $punt3);
    $media = calcularMedia($punt1, $punt2, $punt3);
    $clasificacion = clasificacion($suma);

    echo "Suma de puntuaciones: " . $suma . "\n";
    echo "Media de puntuaciones: " . $media . "\n";
    echo "Clasificación: " . $clasificacion . "\n";
} else {
    echo "Error: Las puntuaciones deben estar comprendidas entre 0 y 9999.\n";
}