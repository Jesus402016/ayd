<?php

/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:18:38 p.m.
 */

include_once ('../otros/conexion2.php');
include_once ('../DTO/Finca.php');
class Finca_DAO {
    //put your code here
     private $bd;

    function __construct() {
       $this->bd = conexion2::getInstance();
    }


    public function AgregarFinca(Finca $finca) {
     $Nombre=$finca->getNombre();
    $departamento=$finca->getdepartamento();
    $ciudad=$finca->getciudad();
    $idUsuario=$finca->getidusuario();
    $idFinca=$finca->getidfinca();



         $this->bd->conection();
         $consulta="INSERT INTO `finca`(`nombre`, `idUsuario`, `ciudad`,`departamento`) VALUES  "
                 . "('".$Nombre."','".$idUsuario."','".$ciudad."','".$departamento."')";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;

    }

    public function EliminarFinca(Finca $finca) {
        $this->bd->conection();
        $consulta="DELETE FROM `usuario` WHERE `id_user`=".$user->getId_user();
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;

    }

    public function ListarFincas(Finca $finca) {
        $idUsuario =$finca->getidUsuario();
        $this->bd->conection();
        $consulta="SELECT idFinca, nombre FROM finca where  idUsuario=".$idUsuario."";
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
