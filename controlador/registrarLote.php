<?php
include_once '../FACADE/facade.php';
session_start();

$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$medida=$_POST['medida'];
$idFinca=$_POST['finca'];
$estadoF=$_POST['estadoF'];


$facade= Facade::getInstance();
$result=$facade->registrarLote($nombre,$medida,$fecha,$idFinca,$estadoF);


?>
