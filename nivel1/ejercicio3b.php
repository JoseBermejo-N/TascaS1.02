<?php

function calculadora($num1, $num2, $operacion) {


    //pasamos la operación a minúsculas para evitar problemas de mayúsculas/minúsculas
    $operacion = strtolower($operacion);

    switch ($operacion) {
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'multiplicacion':
            return $num1 * $num2;
        case 'division':
            //controlamos la división por cero
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: No se puede dividir por cero.";
            }
        default:
            //en caso de introducir una 
            return "Operación no válida. Introduce suma, resta, multiplicación o división.";
    }

}

//tests de la funcion

echo calculadora(10, 5, 'suma')."\n";
echo calculadora(10, 5, 'resta')."\n";
echo calculadora(10, 5, 'multiplicacion')."\n";
echo calculadora(10, 5, 'division')."\n";

//tests con errores controlados
//division por cero
echo calculadora(10, 0, 'division')."\n";
//operación no válida
echo calculadora(10, 5, 'patata')."\n";
