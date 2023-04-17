
<?php
ini_set('date.timezone', 'America/Argentina/Jujuy');

date_default_timezone_set('America/Argentina/Jujuy');

$fecha_1_enero_2024 = strtotime('1 January 2024'); 
$dias_restantes = ceil(($fecha_1_enero_2024 - time()) / 86400); 

echo "Faltan $dias_restantes días para el 1 de enero de 2024.";
?>
