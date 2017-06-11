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
     $Nombre=$finca->getnombre();
     $ciudad=$finca->getciudad();
     $departamento=$finca->getdepartamento();
     $idusuario=$finca->getidUsuario();
     $this->bd->conection();
     $consulta= "insert into finca (nombre,idUsuario,ciudad,departamento) VALUES('$Nombre','$idusuario','$ciudad','$departamento')";

        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;

    }

    public function EditarFinca(Finca $finca) {
    $Nombre=$finca->getNombre();
    $idUsuario=$finca->getidusuario();
    $idFinca=$finca->getidfinca();



         $this->bd->conection();
         $consulta="INSERT INTO `finca`(`nombre`, `idUsuario`, `Ciudad`,`departamento`) VALUES  "
                 . "('".$Nombre."','".$idUsuario."','".$ciudad."','".$departamento."')";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;

    }

<<<<<<< HEAD
    public function eliminarFinca(Finca $finca) {
=======
    public function EliminarFinca(Finca $finca) {
>>>>>>> de8ea11bdfd548fe90ba88fd07c569b35568951c
        $this->bd->conection();
        $consulta="DELETE FROM `finca` WHERE `idFinca`=".$finca->getidFinca()."";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;

    }

<<<<<<< HEAD


    public function ListarFincas(Finca $finca) {
        $idUsuario =$finca->getidUsuario();
        $this->bd->conection();
        $consulta="SELECT  idFinca, nombre, Ciudad, departamento FROM finca where idUsuario=".$idUsuario."";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function cantidadFincas(Finca $finca) {
        $idUsuario =$finca->getidUsuario();
        $this->bd->conection();
        $consulta="select count('idFinca') as cantidadF from finca f inner join usuario u on f.idUsuario=$idUsuario group by u.idUsuario";
=======
    public function ListarFincas(Finca $finca) {
        $idUsuario =$finca->getidUsuario();
        $this->bd->conection();
        $consulta="SELECT idFinca, nombre FROM finca where  idUsuario=".$idUsuario."";
>>>>>>> de8ea11bdfd548fe90ba88fd07c569b35568951c
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
