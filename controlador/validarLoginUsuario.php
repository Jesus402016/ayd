<?php
include_once '../FACADE/facade.php';
session_start();


 $usuario=$_POST['usuario'];
 $password=$_POST['password'];
 $rol=$_POST['rol'];

$facade= Facade::getInstance();
$result=$facade->validarLogin($usuario, $password, $rol);

if($result!=false){

     switch ($rol) {
            case 1:
         $_SESSION['usuario'] =$result['nombre'];
         $_SESSION['rol'] = 'Usuario';
         $_SESSION['id'] = $result['idusuario'];

             echo '<script type="text/javascript">
        window.location="../inicioUsuario.php"
        </script>';
                break;

            case 2:
        $_SESSION['administrador'] =$result['nombre'];
        $_SESSION['rol'] = 'Administrador';
        $_SESSION['id'] = $result['idAdministrador'];
                 echo '<script type="text/javascript">
        window.location="../InicioAdmin.php"
        </script>';
                  break;


        }

}
else {
echo 'ERROR DATOS INCORECTOS';


}






?>
