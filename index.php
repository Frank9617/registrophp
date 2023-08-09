<?php
include_once './formpersonal.php';


$nombres = "Frank";
$apellidos = "Leon";
$fecha_nacimiento = "01-01-1900";
$tipo_documento = "CC";
$documento = "1010111111";
$telefono = "3126549865";
$direccion = "cll 0 00-00";
$ciudad = "Bogotá";
$email = "Frank@gmail.com";

$objPersona = new formPersonal($nombres, $apellidos,$fecha_nacimiento, $tipo_documento, $documento,$telefono, $direccion,$ciudad,$email);

echo $objPersona->getDataUsers();

?>