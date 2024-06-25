<?php
function edades($anioNacimiento){
    $anioActual=2024;

    $edad = $anioActual - $anioNacimiento;

    if ($edad>=18) {
        return "es mayor";
    }
    else{
        return "es menor";
    }
}

?>