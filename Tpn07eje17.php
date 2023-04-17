<?php

$hoy = new DateTime(); // crea un objeto DateTime para la fecha actual
$fecha = DateTime::createFromFormat('d/m/Y', '31/12/2022'); // crea un objeto DateTime para la fecha "31/12/2022"

$diferencia = $hoy->diff($fecha); // calcula la diferencia entre las dos fechas

$dias = $diferencia->days; // obtiene el número de días en la diferencia

echo "La diferencia entre la fecha actual y el 31/12/2022 es de $dias días.";
?>


