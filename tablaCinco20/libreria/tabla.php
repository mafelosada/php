<?php
function tabla($contar) {
    $numero = 5;
    $rango = 10;

    while ($contar<$rango) {
        $contar = $contar +1; 
        $mult = $contar * $numero;

        echo($numero." * ".$contar." = ".$mult);
        echo "---";
    }   
}
?>