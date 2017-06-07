<?php
include_once '../FACADE/facade.php';
session_start();

$nombre=$_POST['Nombre'];
$departamento=$_POST['departamento'];
$ciudad=$_POST['ciudad'];
$idusuario= $_SESSION['id'];

$facade= Facade::getInstance();
$result=$facade->registrarFinca($ciudad, $nombre, $departamento,$idusuario);


?>
