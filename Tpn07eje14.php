<?php
ini_set('date.timezone', 'America/Argentina/Jujuy');
date_default_timezone_set('America/Argentina/Jujuy');

$mediodia_hoy = strtotime('today 12:00 PM'); 
$horas_restantes = ceil(($mediodia_hoy - time()) / 3600); 

echo "Faltan $horas_restantes horas para el mediodía.";
?>
