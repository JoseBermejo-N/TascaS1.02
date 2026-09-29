<?php

function gradoEstudiante($nota) {
    // controlamos rango de la nota
    if ($nota < 0 || $nota > 100) {
        return "Error: la nota debe estar entre 0 y 100%.\n";
    }

    // determinamos el grado según la nota
    if ($nota >= 60) {
        return "Nota: " . $nota . "% -> El grado es: Primera División.\n";
    } 
    elseif ($nota >= 45) { 
        return "Nota: " . $nota . "% -> El grado es: Segunda División.\n";
    } 
    elseif ($nota >= 33) { 
        return "Nota: " . $nota . "% -> El grado es: Tercera División.\n";
    } 
    else { 
        return "Nota: " . $nota . "% -> El estudiante repetirá.\n";
    }
}

//testeando la función con diferentes notas

echo gradoEstudiante(75);  // Primera División
echo gradoEstudiante(52);  // Segunda División
echo gradoEstudiante(40);  // Tercera División
echo gradoEstudiante(28);  // Repetirá

//testeando funcion con errores de validación
echo gradoEstudiante(105); // Error de validación
echo gradoEstudiante(-10); // Error de validación