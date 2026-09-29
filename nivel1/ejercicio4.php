<?php


/*inicializamos $numLimite y $sumando con valores por defecto 
en el caso de que no se pasen parámetros a la función*/

function serieNumeros($sumando = 1 , $numLimite = 10) {
    //controlamos entrada de parametros
    if (!is_numeric($sumando) || !is_numeric($numLimite)) {
        return "Error: los parámetros deben ser numéricos.";
    }

    if ($sumando < 1) {
        return "Error: el sumando ha de ser mayor que cero.";
    }
    if ($numLimite < 1) {
        return "Error: el numero límite ha de ser mayor que cero.";
    }
     if ($sumando > $numLimite) {
        return "Error: el sumando no puede ser mayor que el número límite.";

    }

    echo "Serie de números hasta " . $numLimite . " sumando de " . $sumando . " en ". $sumando . ":\n";

    for ($i = 0; $i <= $numLimite; $i += $sumando) {

        echo $i . "\n";
    }
}

//testeando la funcion con diferentes parámetros

serieNumeros(5, 20); // Llamada a la función con parámetros
serieNumeros(2); /* Llamada a la función con un solo parámetro
                 para comprobar que el limite por defecto es 10*/

//testeando la funcion con parametros erroneos
echo serieNumeros(-1, 10) . "\n"; // Llamada a la función con un sumando negativo
echo serieNumeros(1, -10) . "\n"; // Llamada a la función con un limite negativo
echo serieNumeros("a", 10) . "\n"; // Llamada a la función con un sumando no numérico
echo serieNumeros(20, 2) . "\n"; // Llamada a la función con un limite menor que el sumando

