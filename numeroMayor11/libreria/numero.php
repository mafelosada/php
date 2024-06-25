<?php
function comparacion($numeroUno,$numeroDos){
    if ($numeroUno==$numeroDos) {
        return "iguales";
    }
    else if ($numeroUno>$numeroDos){
        return "Numero 1 es mayor";
    }
    else {
        return "Nuemro 2 es mayor";
    }
}
?>