<?php

include_once '../FACADE/facade.php';

$idLote = $_GET["id"];
$facade= Facade::getInstance();
$result = $facade->eliminarLote($idLote);
header ("location: ../AdministrarLote.php");


 ?>
