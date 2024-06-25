<?php
function tabla($contar) {
    $numero = 5;
    $rango=10;

    for($contar = $contar; $contar<=$rango; $contar++) { 
        $mult = $contar * $numero;

        echo($numero." * ".$contar." = ".$mult);
        echo "---";
    }  
}
?>