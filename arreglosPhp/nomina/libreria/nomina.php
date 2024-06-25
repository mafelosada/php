<?php

$nomina = [
    ['Id' => 1, 'nombres' => 'Ana', 'apellidos' => 'Salazar', 'cargo' => 'Pediatra', 'valorDia' => 500000, 'diasTrabajados' => 20],
    ['Id' => 2, 'nombres' => 'Thomas', 'apellidos' => 'Diaz', 'cargo' => 'Ingeniero Civil', 'valorDia' => 120278, 'diasTrabajados' => 15],
    ['Id' => 3, 'nombres' => 'Laura', 'apellidos' => 'Lopez', 'cargo' => 'Aseador', 'valorDia' => 35000, 'diasTrabajados' => 31],
    ['Id' => 4, 'nombres' => 'Barbara', 'apellidos' => 'Garcia', 'cargo' => 'Pediatra', 'valorDia' => 700000, 'diasTrabajados' => 5],
    ['Id' => 5, 'nombres' => 'Daniel', 'apellidos' => 'Legizamo', 'cargo' => 'Profesor', 'valorDia' => 70000, 'diasTrabajados' => 45],
    ['Id' => 6, 'nombres' => 'Gerardo', 'apellidos' => 'Muñoz', 'cargo' => 'Secretario', 'valorDia' => 60000, 'diasTrabajados' => 30],
    ['Id' => 7, 'nombres' => 'Karen', 'apellidos' => 'Alvarez', 'cargo' => 'Ingeniero Civil', 'valorDia' => 120278, 'diasTrabajados' => 24],
    ['Id' => 8, 'nombres' => 'Camilo', 'apellidos' => 'Sanchez', 'cargo' => 'Vigilante', 'valorDia' => 50000, 'diasTrabajados' => 25],
    ['Id' => 9, 'nombres' => 'Armel', 'apellidos' => 'Gonzales', 'cargo' => 'Pediatra', 'valorDia' => 550000, 'diasTrabajados' => 18],
    ['Id' => 10, 'nombres' => 'Mateo', 'apellidos' => 'Losada', 'cargo' => 'Profesor', 'valorDia' => 70000, 'diasTrabajados' => 29]
];

$numeroRegistros = count($nomina);

for ($iteracion = 0; $iteracion < $numeroRegistros; $iteracion++) {
    print_r($nomina[$iteracion]);
    echo "_____";
}

echo "____________________________________________________________________________________________________________________________________________________________";
$nomina2 = $nomina;

echo "\n";
function salario($nomina = []) {
    return array_map(function($item) {
        return $item['valorDia'] * $item['diasTrabajados'];
    }, $nomina);
}


function subTrans($nomina2 = []) {
    $subTransporte = array_map(function($item) {
        return $item['salario'];
    }, $nomina2);
    $salarioMinimo = 1600000;
    if (max($subTransporte) <= $salarioMinimo * 2) {
        return 1200000;
    } else {
        return 0;
    }
}

function salud($nomina2 = []) {
    return array_map(function($item) {
        return $item['salario'] * 0.12;
    }, $nomina2);
}

function pension($nomina2 = []) {
    return array_map(function($item) {
        return $item['salario'] * 0.16;
    }, $nomina2);
}

function arl($nomina2 = []) {
    return array_map(function($item) {
        return $item['salario'] * 0.052;
    }, $nomina2);
}

function retencion($nomina2 = []) {
    $valor1 = array_map(function($item) {
        return $item['salario'];
    }, $nomina2);
    $salarioMinimo = 1600000;
    if ($valor1 >= $salarioMinimo * 6) {
        return array_map(function($item) {
            return $item['salario'] * 0.02;
        }, $nomina2);
    } elseif ($valor1 >= $salarioMinimo * 8) {
        return array_map(function($item) {
            return $item['salario'] * 0.04;
        }, $nomina2);
    } elseif ($valor1 >= $salarioMinimo * 12) {
        return array_map(function($item) {
            return $item['salario'] * 0.08;
        }, $nomina2);
    } else {
        return 0;
    }
}
$numeroRegistros2 = count($nomina2);
for ($iterar = 0; $iterar < $numeroRegistros2; $iterar++) {
    $nomina2[$iterar]['salario'] = salario([$nomina2[$iterar]])[0];
    $nomina2[$iterar]['salud'] = salud([$nomina2[$iterar]])[0];
    $nomina2[$iterar]['pension'] = pension([$nomina2[$iterar]])[0];
    $nomina2[$iterar]['arl'] = arl([$nomina2[$iterar]])[0];
    $nomina2[$iterar]['subTransporte'] = subTrans([$nomina2[$iterar]]);
    $nomina2[$iterar]['retencion'] = retencion([$nomina2[$iterar]])[0];
    echo "___";
    print_r($nomina2[$iterar]);
}
echo "______________________________________________________________";

function totalPago($nomina2 = []) {
    $sumaPago = array_map(function($item) {
        return $item['salario'] + $item['subTransporte'];
    }, $nomina2);

    $descuentos = array_map(function($item) {
        return $item['salud'] + $item['pension'] + $item['arl'] + $item['retencion'];
    }, $nomina2);

    return $sumaPago - $descuentos;
}

$nomina3 = array_fill(0, 10, []);

for ($filas = 0; $filas < count($nomina3); $filas++) {
    $nomina3[$filas]['Salud'] = salud([$nomina2[$filas]])[0];
    $nomina3[$filas]['Pension'] = pension([$nomina2[$filas]])[0];
    $nomina3[$filas]['Arl'] = arl([$nomina2[$filas]])[0];
    $nomina3[$filas]['Retencion'] = retencion([$nomina2[$filas]]);
   // $nomina3[$filas]['TotalPagar'] = totalPago([$nomina2[$filas]]);
    echo "___";
}


echo "\nTotal Pagos\n\n";
foreach ($nomina3 as $fila) {
    print_r($fila);
}



?>
