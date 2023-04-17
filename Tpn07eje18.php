<?php
ini_set('date.timezone', 'America/Argentina/Jujuy');
date_default_timezone_set('America/Argentina/Jujuy');

$hoy = new DateTime(); // crea un objeto DateTime para la hora actual
$hora = DateTime::createFromFormat('h:i A', '10:30 AM'); // crea un objeto DateTime para la hora "10:30 AM"

$diferencia = $hoy->diff($hora); // calcula la diferencia entre las dos horas

$horas = $diferencia->h; // obtiene el número de horas en la diferencia

echo "La diferencia entre la hora actual y las 10:30 AM es de $horas horas.";
?>
