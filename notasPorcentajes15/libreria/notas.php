<?php
function notas($nota1, $nota2, $nota3) {

    $porc1 = $nota1 * 0.2;
    $porc2 = $nota2 * 0.35;
    $porc3 = $nota3 * 0.45;

    $suma = $porc1 + $porc2 + $porc3;

    if ($suma>4.5) {
        return "nota superior";
    }
    else if($suma<=4.5 && $suma>3.5){
        return "nota buena";
    }
    else if($suma<=3.5 && $suma>3){
        return "nota media";
    }
    else{
        return "nota mala";
    }
    
}

?>