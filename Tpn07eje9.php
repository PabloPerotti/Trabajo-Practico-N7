<?php

ini_set('date.timezone', 'America/Argentina/Jujuy');

date_default_timezone_set('America/Argentina/Jujuy');


$fecha_actual = date('d-m-Y');
$fecha = date_create($fecha_actual);
echo "hoy es el dia: ".$fecha_actual.PHP_EOL;
date_modify($fecha, '+10 days');
echo "en 10 dias sera el dia ". date_format($fecha, 'd/m/Y');
?>

