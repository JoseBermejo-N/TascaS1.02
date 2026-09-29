<?php

$intX = 10; 
$intY = 5; 
$doubleN = 7.5;
$doubleM = 3.25; 

/*operaciones aritméticas con enteros:
 suma, resta, multiplicación y módulo*/

echo "Valor de X: " . $intX . "\n";
echo "Valor de Y: " . $intY . "\n";
echo "Suma: " . ($intX + $intY) . "\n";
echo "Resta: " . ($intX - $intY) . "\n";
echo "Multiplicación: " . ($intX * $intY) . "\n";
echo "Módulo: " . ($intX % $intY) . "\n\n";

/*ahora hacemos las mismas operaciones con valores tipo double*/

echo "Valor de N: " . $doubleN . "\n";
echo "Valor de M: " . $doubleM . "\n";
echo "Suma: " . ($doubleN + $doubleM) . "\n";
echo "Resta: " . ($doubleN - $doubleM) . "\n";
echo "Multiplicación: " . ($doubleN * $doubleM) . "\n";
echo "Módulo: " . ($doubleN % $doubleM) . "\n\n";

echo "Imprimimos el doble de cada variable";
echo "Doble de X: " . ($intX * 2) . "\n";
echo "Doble de Y: " . ($intY * 2) . "\n";
echo "Doble de N: " . ($doubleN * 2) . "\n";
echo "Doble de M: " . ($doubleM * 2) . "\n\n";

echo "Suma de todas las variables: " . ($intX + $intY + $doubleN + $doubleM) . "\n\n";

echo "Producto de todas las variables: " . ($intX * $intY * $doubleN * $doubleM) . "\n\n";


