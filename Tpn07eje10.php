<?php

ini_set('date.timezone', 'America/Argentina/Jujuy');

date_default_timezone_set('America/Argentina/Jujuy');

$hora_actual = date('H:i:s'); // Obtiene la hora actual en formato "H:i:s"
$hora_en_5_horas = date('H:i:s', strtotime('+5 hours')); // Calcula la hora en 5 horas

echo 'Hora actual: ' . $hora_actual .PHP_EOL ;
echo 'Hora en 5 horas: ' . $hora_en_5_horas;
?>
