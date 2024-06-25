<?php
function tabla($num) {
    $numeroImpar=0;
    $numeroPar=0;

    for ($contar = 1; $contar <= 10; $contar++) {
        $resultado = $num * $contar;
        echo($num . " * " . $contar . " = " . $resultado);
        echo "->";
        if ($resultado % 2 === 0) {
            echo("buzz");
            $numeroPar++;
        } else {
            echo("bass");
            $numeroImpar++;
        }
        echo "_____";
    }

    echo "-------";
    echo("PARES: " . $numeroPar);
    echo "---";
    echo("IMPARES: " . $numeroImpar);
    echo "-------";

    } 

?>