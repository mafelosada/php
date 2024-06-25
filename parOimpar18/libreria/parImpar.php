<?php
function numero($contar) {
    $numero = 0;

    while ($contar>$numero) {
        $numero = $numero +1; 
        
        if ($numero%2==0) {
            echo($numero." es Par\n");
        } else {
            echo($numero." es Impar\n");
        }
        echo"-";
    }
}
?>