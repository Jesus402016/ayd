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


    public function AgregarLote(Finca $finca) {
  

         $this->bd->conection();
         $consulta="INSERT INTO `Lote`(`nombre`, `idUsuario`, `ciudad`,`departamento`) VALUES  "
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

    public function ListarFincas() {

          $this->bd->conection();
        $consulta="SELECT `id_user`, `nombre_user`, `correo_user`, `calve_user` FROM `usuario`";
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
