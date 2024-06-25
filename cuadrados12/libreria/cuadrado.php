<?php
function areas($lado,$lado2,$lado3){
    $cuad1 = $lado*$lado;
    $cuad2 = $lado2*$lado2;
    $cuad3 = $lado3*$lado3;


    if ($cuad2 && $cuad2==$cuad3 && $cuad1==$cuad3) {
        return "Cuadrados Iguales";
    }
    else if ($cuad1>$cuad2 && $cuad1>$cuad3) {
        return "Cuadrado 1 mayor";
    }
    else if ($cuad2>$cuad1 && $cuad2>$cuad3) {
        return "Cuadrado 2 mayor";
    }
    else{
        return "Cuadrado 3 mayor";

    }
    }
?>