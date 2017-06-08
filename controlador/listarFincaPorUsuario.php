<?php
include_once '../FACADE/facade.php';
session_start();
$facade= Facade::getInstance();
$result=$facade->listarFincas($_POST['id']);
echo $result;
?>
