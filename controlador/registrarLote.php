<?php
include_once '../FACADE/facade.php';
session_start();

$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$medida=$_POST['medida'];
$idFinca=$_POST['finca'];
<<<<<<< HEAD
$estadoF=$_POST['estadoF'];


$facade= Facade::getInstance();
$result=$facade->registrarLote($nombre,$medida,$fecha,$idFinca,$estadoF);
=======
$idusuario= $_SESSION['id'];

$facade= Facade::getInstance();
$result=$facade->registrarLote($nombre,  $medida,$fecha,$idFinca);
>>>>>>> de8ea11bdfd548fe90ba88fd07c569b35568951c


?>
