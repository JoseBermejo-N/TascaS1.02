<?php

// definicion de variables  
$MiInt = 28;                        // Integer 
$MiDouble = 10.5;                   // Double 
$MiString = "Hola mundo en PHP!";   // String 
$MiBoolean = true;                  // Boolean

// Imprimir las variables por la terminal

echo "Integer: " . $MiInt . "\n";
echo "Double: " . $MiDouble . "\n";
echo "String: " . $MiString . "\n";
echo "Boolean: " . $MiBoolean . "\n";

// creación de una constante
const MI_NOMBRE = "Jose"; 

// mostrar constante 

echo MI_NOMBRE . "\n";

//mostrando constante en formato titulo
echo strtoupper(MI_NOMBRE) . "\n"; 