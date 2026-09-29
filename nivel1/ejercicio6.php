<?php 

function isBitten() {
    // rand(0, 1) genera un 0 o un 1 de forma aleatoria.
    $miBoleano = rand(0, 1);
    return $miBoleano;
}

if (isBitten()== 1) {
    echo "Charlie te ha mordido.\n";
} else {
    echo "Te has salvado de la mandíbula de Charlie.\n";
}


//testeamos la función varias veces más para ver el resultado aleatorio
for ($i = 0; $i < 10; $i++) {
    if (isBitten() == 1) {
        echo "Charlie te ha mordido.\n";
    } else {
        echo "Te has salvado de la mandíbula de Charlie.\n";
    }
}