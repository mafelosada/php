
<?php
$arreglo = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$cantidadDatos = count($arreglo);

for ($iterar = 0; $iterar < $cantidadDatos; $iterar++) {
    echo $arreglo[$iterar] . " ";
}

$numerosPares = [];
foreach ($arreglo as $numero) {
    if ($numero % 2 === 0) {
        $numerosPares[] = $numero;
    }
}
echo "\nNúmeros pares: " . implode(", ", $numerosPares);


$numerosImpares = [];
foreach ($arreglo as $numero) {
    if ($numero % 2 === 1) {
        $numerosImpares[] = $numero;
    }
}
echo "\nNúmeros impares: " . implode(", ", $numerosImpares);
?>
