<?php

$hora_actual = date('H'); // obtiene la hora actual en formato de 24 horas (0-23)

if ($hora_actual >= 5 && $hora_actual < 12) {
    echo "Buenos días";
} elseif ($hora_actual >= 12 && $hora_actual < 19) {
    echo "Buenas tardes";
} else {
    echo "Buenas noches";
}
?>
