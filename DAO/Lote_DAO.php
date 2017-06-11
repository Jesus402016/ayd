<?php

/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:18:38 p.m.
 */

include_once ('../otros/conexion2.php');
include_once ('../DTO/Lote.php');
class Lote_DAO {
    //put your code here
     private $bd;

    function __construct() {
       $this->bd = conexion2::getInstance();
    }


    public function AgregarLote(Lote $lote) {
      $nombre=$lote->getnombre();
      $medida=$lote->getmedida();
      $fecha=$lote->getfecha();
      $idFinca=$lote->getFinca();
      $eFenologico=$lote->getestadoF();

         $this->bd->conection();
         $consulta="INSERT INTO `Lote`(`nombre`, `medida`, `idFinca`,`fecha`,`estadofenologico`) VALUES  "
                 . "('".$nombre."','".$medida."','".$idFinca."','".$fecha."','".$eFenologico."')";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;

    }

    public function EliminarLote(Lote $lote) {

        $this->bd->conection();
        $consulta="DELETE FROM `lote` WHERE `idLote`=".$lote->getIdlote()."";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;

    }

    public function ListarLotes($idFinca) {

          $this->bd->conection();
        $consulta="SELECT `idLote`, `nombre`, `medida`, `idFinca` , `fecha`, `estadofenologico` FROM `lote` WHERE `idFinca` = ".$idFinca."";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function cantidadLotesU($idUsuario) {

          $this->bd->conection();
          $consulta="select count(idLote) as cantidadL from lote L inner join finca F on L.idFinca=F.idFinca inner join usuario u  on F.idUsuario=$idUsuario group by u.idUsuario";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }



    public function lotesxFinca($idFinca) {

        $this->bd->conection();
        $consulta="select count(idLote) as lotes from lote where idFinca = '$idFinca' group by idFinca";
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
