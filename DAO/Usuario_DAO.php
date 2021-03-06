<?php

/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:18:38 p.m.
 */

include_once ('../otros/conexion2.php');
include_once ('../DTO/Usuario.php');
class Usuario_DAO {
    //put your code here
     private $bd;

    function __construct() {
       $this->bd = conexion2::getInstance();
    }


    public function AgregarUsuario(Usuario $user) {
    $Nombre=$user->getNombre();
    $cedula=$user->getcedula();
    $correo=$user->getcorreo();
    $ciudad=$user->getciudad();
    $departamento=$user->getdepartamento();
    $telefono=$user->gettelefono();
    $ocupacion=$user->getocupacion();
    $contrasena=$user->getpassword();


    $this->bd->conection();
    $consulta="insert into usuario(nombre, cedula,correo,telefono,ocupacion,password,ciudad) values ('$Nombre','$cedula','$correo','$telefono','$ocupacion','$contrasena','$ciudad')";
    $result=$this->bd->ejecutarConsultaSQL($consulta);
    return $result;

    }


      public function Login(Usuario $usuario) {

        $this->bd->conection();
        $consulta="SELECT `idusuario`, `nombre`, `correo`, `cedula` FROM `usuario` WHERE `cedula`='".$usuario->getcedula()."' AND `password`='".$usuario->getpassword()."'";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;


    }
    public function EliminarUsuario(Usuario  $usuario) {

        $this->bd->conection();
        $consulta="DELETE FROM `usuario` WHERE `id_user`=".$user->getId_user();
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;

    }

    public function ListarUsuarios() {

          $this->bd->conection();
        $consulta="SELECT * FROM `usuario`";
        $result=$this->bd->ejecutarConsultaSQL($consulta);
        return $result;
    }

    public function infoUsuario(Usuario $Usuario){
      $this->bd->conection();
      $id = $Usuario->getidUsuario();
    $consulta= "SELECT  `nombre`  FROM `usuario` WHERE `idusuario` ='".$id."'";
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
