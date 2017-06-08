<?php
include_once '../FACADE/facade.php';
session_start();

$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$medida=$_POST['medida'];
$idFinca=$_POST['finca'];
$idusuario= $_SESSION['id'];

$facade= Facade::getInstance();
$result=$facade->registrarLote($nombre,  $medida,$fecha,$idFinca);


?>
