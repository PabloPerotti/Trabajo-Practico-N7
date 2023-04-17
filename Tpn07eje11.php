
<?php

ini_set('date.timezone', 'America/Argentina/Jujuy');

date_default_timezone_set('America/Argentina/Jujuy');

$fecha = mktime(0,0,0,12,23,2023);
$fechaActual = time();


    if ($fecha > $fechaActual){
        echo "La fecha del 23 de diciembre del 2023 es mayor que la actual";
    } elseif ($fecha < $fechaActual){
        echo "La fecha del 23 de diciembre del 2023 es menor que la actual";
    } else {
        echo "La fecha del 23 de diciembre del 2023 es igual a la actual";
    }
?>
