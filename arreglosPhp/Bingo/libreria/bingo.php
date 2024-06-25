<?php
$bingo = [];
$acumulador = 0;

for ($fila = 0; $fila < 5; $fila++) {
    $interno = [];
    for ($columna = 0; $columna < 5; $columna++) {
        $acumulador++;
        $interno[$columna] = $acumulador * 3;
    }
    $bingo[$fila] = $interno;
}

echo "B_";
for ($fila = 0; $fila < 5; $fila++) {
    echo $bingo[$fila][0] . "\n";
}

echo "----";
echo "I_";
for ($fila = 0; $fila < 5; $fila++) {
    echo $bingo[$fila][1] . "\n";
}

echo "----";
echo "N_";
for ($fila = 0; $fila < 5; $fila++) {
    echo $bingo[$fila][2] . "\n";
}

echo "----";
echo "G_";
for ($fila = 0; $fila < 5; $fila++) {
    echo $bingo[$fila][3] . "\n";
}

echo "----";
echo "O_";
for ($fila = 0; $fila < 5; $fila++) {
    echo $bingo[$fila][4] . "\n";
}

echo "----";

echo "Primera x_";
for ($fila = 0; $fila < 3; $fila++) {
    $line = "";
    for ($columna = 0; $columna < 3; $columna++) {
        if ($fila === $columna || $fila + $columna === 3 - 1) {
            $line .= $bingo[$fila][$columna] . " ";
        } else {
            $line .= "  ";
        }
    }
    echo $line . "\n";
}

echo "----";
echo "Segunda x_";

for ($fila = 2; $fila < 5; $fila++) {
    $line = "";
    for ($columna = 0; $columna < 3; $columna++) {
        if ($fila === $columna || $fila + $columna === 4 - 2 || $fila + $columna === 4 || $fila + $columna === 6) {
            $line .= $bingo[$fila][$columna] . " ";
        } else {
            $line .= "  ";
        }
    }
    echo $line . "\n";
}

echo "----";
echo "Tercera x_";

for ($fila = 0; $fila < 3; $fila++) {
    $line = "";
    for ($columna = 2; $columna < 5; $columna++) {
        if ($fila === $columna || $fila + $columna === 2 || $fila + $columna === 4 || $fila + $columna === 6) {
            $line .= $bingo[$fila][$columna] . " ";
        } else {
            $line .= "  ";
        }
    }
    echo $line . "\n";
}
?>
