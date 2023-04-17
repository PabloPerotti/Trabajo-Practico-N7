<?php
$hora = "05:30 PM";
$hora_obj = date_create_from_format('H:i A', $hora);
$hora_nuevo_form = $hora_obj ->format('H:i');
echo $hora_nuevo_form;

?>