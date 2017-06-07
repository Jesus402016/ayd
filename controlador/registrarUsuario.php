<?php
include_once '../FACADE/facade.php';


 $nombre=$_POST['Nombre'];
 $cedula=$_POST['cedula'];
 $correo=$_POST['correo'];
 $clave=$_POST['clave'];
$ocupacion=$_POST['ocupacion'];
$telefono=$_POST['telefono'];
$departamento=$_POST['departamento'];
$ciudad=$_POST['ciudad'];
$facade= Facade::getInstance();
$result=$facade->registrarUsuario($ciudad, $clave, $ocupacion, $correo, $telefono, $nombre, $cedula);


?>
