<?php
include_once '../FACADE/Facade.php';
session_start();
$facade= Facade::getInstance();
$result=$facade->listarFincas($_POST['id']);
echo $result;
?>
