<?php
function tabla($contar) {
    $numero = 10;
    $rango = 9;

    while ($contar<$numero ) {
        $contar = $contar +1; 
        $mult = $contar * $rango;

        echo($rango." * ".$contar." = ".$mult);
        echo "__";
        if ($contar%2==0) {
            echo($mult." es Par");

        } else {
            echo($mult." es Impar");
        }
        echo "-----";
    }   
}
?>