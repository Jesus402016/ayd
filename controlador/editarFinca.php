<?php
include_once '../FACADE/facade.php';
session_start();

$nombre=$_POST['Nombre'];
$idFinca = $_POST['idFinca'];

$facade= Facade::getInstance();
$result=$facade->editarFinca($nombre,$idFinca);



?>
