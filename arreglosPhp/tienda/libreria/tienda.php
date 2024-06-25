<?php
$tienda = [
    ['producto' => 'arroz', 'tipoProducto' => 'granos', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 2450],
    ['producto' => 'papa', 'tipoProducto' => 'fruver', 'tipoUnidad' => 'gramos', 'cantidad' => 500, 'precio' => 1000],
    ['producto' => 'mora', 'tipoProducto' => 'fruver', 'tipoUnidad' => 'gramos', 'cantidad' => 500, 'precio' => 1500],
    ['producto' => 'trucha', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 9000],
    ['producto' => 'pollo Entero', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 500, 'precio' => 4500]
];

$nuevoProducto = ['producto' => 'res', 'tipoProducto' => 'carnes', 'tipoUnidad' => 'gramos', 'cantidad' => 1000, 'precio' => 7500];
$tienda[] = $nuevoProducto;
$tienda[0]['precio'] = 5000; // Modificar elemento

$numeroRegistros = count($tienda);

for ($iteracion = 0; $iteracion < $numeroRegistros; $iteracion++) {
    print_r($tienda[$iteracion]);
}

$listaBusqueda = [];
for ($iteracion = 0; $iteracion < $numeroRegistros; $iteracion++) {
    if ($tienda[$iteracion]['tipoProducto'] == 'fruver') {
        $listaBusqueda[] = $tienda[$iteracion];
    }
}

print_r($listaBusqueda);
echo "Número de registros: $numeroRegistros\n";

$nuevoArreglo = [];
foreach ($tienda as $producto) {
    $nombre = $producto['producto'];
    $valor = $producto['cantidad'] * $producto['precio'];
    $nuevoArreglo[$nombre] = $valor;
}

print_r($nuevoArreglo);
?>
