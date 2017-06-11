<?php
<<<<<<< HEAD
include_once '../FACADE/Facade.php';
=======
include_once '../FACADE/facade.php';
>>>>>>> de8ea11bdfd548fe90ba88fd07c569b35568951c
session_start();
$facade= Facade::getInstance();
$result=$facade->listarFincas($_POST['id']);
echo $result;
?>
