
<?php

$fecha = "15/06/2022"; 
$fecha_obj = date_create_from_format('d/m/Y', $fecha); 

$fecha_formato_y_m_d = $fecha_obj->format('Y-m-d'); 

echo $fecha_formato_y_m_d;

?>


