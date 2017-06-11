<?php

include_once '../FACADE/facade.php';

$idFinca = $_GET["id"];
$facade= Facade::getInstance();
$result = $facade->eliminarFinca($idFinca);
header ("location: ../AdministrarFinca.php");


 ?>
