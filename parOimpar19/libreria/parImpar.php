<?php
function numero($contar) {
    $numero = 1;

    for ($contar = $contar; $contar>=$numero; $numero++) {
        
        if ($numero%2==0) {
            echo($numero." es Par");
        } else {
            echo($numero." es Impar");
        }
        echo "---";
    }
    
}

?>