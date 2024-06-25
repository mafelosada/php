
<?php
function formarX($cantidadDatos) {
    for ($fila = 0; $fila < count($cantidadDatos); $fila++) {
        $line = "";
        for ($columna = 0; $columna < count($cantidadDatos[$fila]); $columna++) {
            if ($fila === $columna || $fila + $columna === count($cantidadDatos) - 1) {
                $line .= $cantidadDatos[$fila][$columna] . " ";
            } else {
                $line .= "  ";
            }
        }
        echo $line . "\n";
    }
}

$arreglo = [
    [2, 4, 6, 8, 10],
    [12, 14, 16, 18, 20],
    [22, 24, 26, 28, 30],
    [32, 34, 36, 38, 40],
    [42, 44, 46, 48, 50]
];

formarX($arreglo);
?>


