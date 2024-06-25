
<?php
function salarios($dias, $valorDia){

    $totalSalario= $dias*$valorDia;
    return $totalSalario;
}


function subsidioTrans($dias, $valorDia){
    $salarioMinimo=1600000;
    $salarioTrans=salarios($dias, $valorDia);
    $subTransporte;

    if ($salarioTrans<=$salarioMinimo*2) {
        $subTransporte=114000;
    }
    else{
        $subTransporte=0;
    }
    return $subTransporte;
}

function salud($dias, $valorDia){

    $pagoSalud=salarios($dias, $valorDia)*0.12;
    return $pagoSalud;
}

function pension($dias, $valorDia){

    $pagoPension=salarios($dias, $valorDia)*0.16;
    return $pagoPension;
}

function arl($dias, $valorDia){

    $pagoArl=salarios($dias, $valorDia)*0.052;
    return $pagoArl;
}

function deducibles($dias, $valorDia){

    $pagoDeducibles=salud($dias, $valorDia) + pension($dias, $valorDia) + arl($dias, $valorDia);
    return $pagoDeducibles;
}

function retenciones($dias, $valorDia){
    $salarioMinimo=1600000;
    $salarioRetencion=salarios($dias, $valorDia);
    $retencionTotal;

    if ($salarioRetencion>=$salarioMinimo*4) {
        $retencionTotal=0.04;
    }
    else{
        $retencionTotal=0;
    }
    return $retencionTotal;
}

function totalPago($dias, $valorDia){

    $pago=(salarios($dias, $valorDia) + subsidioTrans($dias, $valorDia)) - deducibles($dias, $valorDia) - retenciones($dias, $valorDia);
    return $pago;
}

?>