<?php
$fecha_nacimiento = new DateTime('1976-07-11'); // crea un objeto DateTime para la fecha de nacimiento
$fecha_actual = new DateTime(); // crea un objeto DateTime para la fecha actual

$diferencia = $fecha_actual->diff($fecha_nacimiento); // calcula la diferencia entre las dos fechas

$edad = $diferencia->y; // obtiene el número de años en la diferencia

echo "La persona tiene $edad años.";
?>
