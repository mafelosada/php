<?php
function tabla($num) {
    $contar = 1;
    $numeroPar=0;
    $numeroImpar=0;

    while ($contar <= 10) {
        $resultado = $num * $contar;
        echo($num . " * " . $contar . " = " . $resultado);

        $contar++;
        echo "->";
        if ($resultado % 2 === 0) {
            echo("buzz");
            $numeroPar++;
        } else {
            echo("bass");
            $numeroImpar++;
        }
        echo "____"; 

    }

    echo "--------";    
    echo("PARES: " .$numeroPar);
    echo "---"; 
    echo("IMPARES: " .$numeroImpar);
    echo "--------"; 
}


?>