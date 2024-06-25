<?php

$tablaMultiplicar = [];
for ($contar = 1; $contar <= 10; $contar++) {
    $tablaMultiplicar[] = 5 * $contar;
}

$numerosPares = [];
$numerosImpares = [];

foreach ($tablaMultiplicar as $numero) {
    if ($numero % 2 === 0) {
        $numerosPares[] = $numero;
    } else {
        $numerosImpares[] = $numero;
    }
}

echo "Tabla de multiplicar del 5:\n";
echo implode(", ", $tablaMultiplicar) . "\n";

echo "Números pares:\n";
echo implode(", ", $numerosPares) . "\n";

echo "Números impares:\n";
echo implode(", ", $numerosImpares) . "\n";


echo "-----------";

$tablaMultiplicar = [];
for ($contar = 1; $contar <= 10; $contar++) {
    $tablaMultiplicar[] = 9 * $contar;
}

$numerosPares = [];
$numerosImpares = [];

foreach ($tablaMultiplicar as $numero) {
    if ($numero % 2 === 0) {
        $numerosPares[] = $numero;
    } else {
        $numerosImpares[] = $numero;
    }
}

echo "Tabla de multiplicar del 9:\n";
echo implode(", ", $tablaMultiplicar) . "\n";

echo "Números pares:\n";
echo implode(", ", $numerosPares) . "\n";

echo "Números impares:\n";
echo implode(", ", $numerosImpares) . "\n";
?>



