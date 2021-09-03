<?php
$Tiulo = "Ejercicio 1";
include_once("../estructura/cabecera.php");

$datos= data_submitted();
$obj1= new control_subir1();
$respuesta = $obj1->verarchivo($datos);


echo $respuesta;
?>






<?php
include_once("../estructura/pie.php");
?>

