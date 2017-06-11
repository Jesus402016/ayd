<?php
include_once '../FACADE/facade.php';
session_start();
$idusuario= $_SESSION['id'];

$facade= Facade::getInstance();
$result=$facade->listarFertilizantesUsuarioTabla($idusuario);
	echo '{"data":['.$result.']}';
?>
