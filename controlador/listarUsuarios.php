<?php
include_once '../FACADE/facade.php';


$facade= Facade::getInstance();
$result=$facade->listarUsuarios();
	echo '{"data":['.$result.']}';
?>
