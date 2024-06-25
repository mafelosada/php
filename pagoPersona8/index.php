<?php
    include('libreria/pago.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de una Persona</title>
</head>
<body>
    <?php
        var_dump("Pago Persona= ".pago(24,700000));
    ?>
</body>
</html>