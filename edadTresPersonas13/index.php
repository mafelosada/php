<?php
    include('libreria/personas.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad de Tres Personas</title>
</head>
<body>
    <?php
        var_dump($pers1);
        var_dump($pers2);
        var_dump($pers3);

        var_dump(comparar());
    ?>
</body>
</html>