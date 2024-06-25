<?php
function notas($nota,$numPorcentaje){
    $porcentaje = $nota * $numPorcentaje;

    return $porcentaje;
}
$nota1;
$nota2;
$nota3;
$suma;
        $nota1=notas(4.6,0.2);
        $nota2=notas(2.2,0.3);
        $nota3=notas(3.9,0.5); 

        $suma=$nota1+$nota2+$nota3;

?>