<?php

function edad($anioNacimiento){
    $anioActual = 2024;
    $resultado = $anioActual - $anioNacimiento;

    return $resultado;
}

$pers1 = edad(2000);
$pers2 = edad(2007);
$pers3 = edad(2014);

function comparar(){
    global $pers1, $pers2, $pers3;

    if ($pers1 > 17) {
        return "Persona 1 es mayor";
    } else if ($pers2 > 17) {
        return "Persona 2 es mayor";
    } else {
        return "Persona 3 es mayor";
    }
}

echo comparar(); 
?>








