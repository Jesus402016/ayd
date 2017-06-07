<?php

/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:18:38 p.m.
 */

include_once ('../otros/conexion2.php');
include_once ('../DTO/Administrador.php');
class Administrador_DAO {
    //put your code here
     private $bd;

    function __construct() {
       $this->bd = conexion2::getInstance();
    }


      public function Login(Administrador $usuario) {

        $this->bd->conection();
        $consulta="SELECT `idAdministrador`, `nombre`, `correo`, `cedula` FROM `Administrador` WHERE `cedula`='".$usuario->getcedula()."' AND `password`='".$usuario->getpassword()."'";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;


    }


    public function getArray($result){
        return ($this->bd->getArray($result));
    }
   public function getObject($result){
        return ($this->bd->getObject($result));
    }


}
