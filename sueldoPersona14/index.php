<?php
    include('libreria/sueldo.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sueldo Persona</title>
</head>
<body>
    <?php
        var_dump("Sueldo= ".salarios(30, 80000));
        var_dump("Salud= ".salud(30, 80000));
        var_dump("Pension= ".pension(30, 80000));
        var_dump("Arl= ".arl(30, 80000));
        var_dump("Deducibles= ".deducibles(30, 80000));
        var_dump("Total Pago= ".totalPago(30, 80000));
    ?>
    
</body>
</html>