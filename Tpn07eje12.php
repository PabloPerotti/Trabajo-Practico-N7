<?php
ini_set('date.timezone', 'America/Argentina/Jujuy');

date_default_timezone_set('America/Argentina/Jujuy');

$hora = strtotime('15:30 PM');

$horaActual = time();

    if ($hora > $horaActual){
        echo "La hora creada es mayor que la hora Actual".PHP_EOL;
    } elseif ($hora < $horaActual){
        echo "la hora creada es menor que la hora Actual".PHP_EOL;
    } else  {
        echo " La hora creada es igual a la hora Actual".PHP_EOL;
    }
    

?>