<?php

const IMPORTE_MINIMO = 0.10;

function calcularCosteLlamada($duración) {
    if ($duración < 3) {     

        return IMPORTE_MINIMO;  

    } else {
        
        $minutosAdicionales = $duración - 3; 
        $costeMinutoAdicional = 0.05;
        $costeTotal = IMPORTE_MINIMO + ($minutosAdicionales * $costeMinutoAdicional);
        return $costeTotal; 
    }
}

//testeamos la función 

$duracionLlamada = 15; 
$costeLlamada = calcularCosteLlamada($duracionLlamada);
echo "El coste de la llamada de $duracionLlamada minutos es: ". $costeLlamada." euros.\n";

//testeamos la función con una llamada inferior a 3 minutos
$duracionLlamada = 1; 
$costeLlamada = calcularCosteLlamada($duracionLlamada);
echo "El coste de la llamada de $duracionLlamada minutos es: ". $costeLlamada." euros.\n";
