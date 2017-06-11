<?php

/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:18:38 p.m.
 */

include_once '../DTO/Usuario.php';
include_once '../DAO/Usuario_DAO.php';
include_once '../DTO/Administrador.php';
include_once '../DAO/Administrador_DAO.php';
include_once '../DTO/Finca.php';
include_once '../DAO/Finca_DAO.php';
include_once '../DTO/Lote.php';
include_once '../DAO/Lote_DAO.php';


class OpUsuario
{


	function __construct() {

    }


	/**
	 *
	 * @param ciudad
	 * @param contraseña
	 * @param ocupacion
	 * @param correo
	 * @param telefono
	 * @param Nombre
	 * @param cedula
	 */
	function registrarUsuario($ciudad, $contrasena, $ocupacion, $correo, $telefono, $Nombre, $cedula)
	{
		$Usuario= new Usuario();
		$UsuarioDAO= new Usuario_DAO();
		$Usuario->setNombre($Nombre);
		$Usuario->setciudad($ciudad);
		$Usuario->setcorreo($correo);
		$Usuario->setocupacion($ocupacion);
		$Usuario->settelefono($telefono);
		$Usuario->setcedula($cedula);
		$Usuario->setpassword($contrasena);
		$result=$UsuarioDAO-> AgregarUsuario($Usuario);

        if($result!=true){
            echo 'Error al registrar Cliente';
        }
        else {
            echo 'Registro Exitoso';
        }

	}




function listarUsuarios()
{
	$Usuario= new Usuario();
	$UsuarioDAO= new Usuario_DAO();

	$tabla = "";
	$result=$UsuarioDAO->listarUsuarios();
    while($row1=$UsuarioDAO->getArray($result))
		{
				$finca=new Finca();
				$fincaDAO=new Finca_DAO();
			  $finca->setidUsuario($row1['idusuario']);
				$fincas=$fincaDAO->cantidadFincas($finca);
				$cantFincas = $fincaDAO->getArray($fincas);
				$loteDAO = new Lote_DAO();
				$lotes=$loteDAO->cantidadLotesU($row1['idusuario']);
				$cantLotes = $loteDAO->getArray($lotes);
				$editar = '<a href='.$row1['idusuario'].'\" data-toggle=\"modal\" data-target=\"#modalEFinca\" type=\"submit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
				$eliminar = '<a href=\"controlador/eliminarFinca.php?id='.$row1['idusuario'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminar esta finca?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
				$tabla.='{
							"nombre":"'.$row1['nombre'].'",
							"cedula":"'.$row1['cedula'].'",
							"correo":"'.$row1['correo'].'",
							"ocupacion":"'.$row1['ocupacion'].'",
							"telefono":"'.$row1['telefono'].'",
							"ciudad":"'.$row1['ciudad'].'",
							"fincas":"'.$cantFincas['cantidadF'].'",
							"lotes":"'.$cantLotes['cantidadL'].'",
							"acciones":"'.$editar.$eliminar.'"
						},';
			}

						$tabla = substr($tabla,0, strlen($tabla) - 1);

						return $tabla;



}


	/**
	 *
	 * @param ciudad
	 * @param idUsuario
	 * @param nombre
	 */
	function registrarFinca($ciudad, $nombre, $departamento,$idusuario)
	{
		$finca = new Finca();
		$fincaDAO = new Finca_DAO();
		$finca->setnombre($nombre);
		$finca->setciudad($ciudad);
		$finca->setdepartamento($departamento);
		$finca->setidUsuario($idusuario);
		$result=$fincaDAO-> AgregarFinca($finca);

		if($result!=true){
				echo 'Error al registrar Finca';
		}
		else {
				echo 'Registro Exitoso';
		}
	}

	function editarFinca($nombre,$idFinca)
	{
		$finca = new Finca();
		$fincaDAO = new Finca_DAO();
		$finca->setNombre($nombre);
		$finca->setidFinca($idFinca);
		$result=$fincaDAO-> EditarFinca($finca);

		if($result!=true){
				echo 'Error al editar Finca';
		}
		else {
				echo 'Finca actualizada';
		}
	}

	function validarLogin($user,$password,$rol)
	{
		if ($rol==1) {
				$usuario=new Usuario();
				$UsuarioDAO=new Usuario_DAO();
				$usuario->setcedula($user);
				$usuario->setpassword($password);


				$resultado=$UsuarioDAO->Login($usuario);
				if($row=$UsuarioDAO->getArray($resultado)){
						return $row;
				}
				else {
						return false;
				}

		}

		 if ($rol==2) {
				$administrador = new Administrador();
				$AdministradorDAO=new Administrador_DAO();
				$administrador->setcedula($user);
				$administrador->setpassword($password);
				$resultado=$AdministradorDAO->Login($administrador);
				if($row=$AdministradorDAO->getArray($resultado)){
						return $row;
				}
				else {
						return false;
				}

		}
	}
		function ListarFincas($idUsuario)
		{
          $cad="";
					$finca=new Finca();
					$fincaDAO=new Finca_DAO();
					$finca->setidUsuario($idUsuario);
					$resultado=$fincaDAO->ListarFincas($finca);
					while($row=$fincaDAO->getArray($resultado)){
								 $cad.="<option value='".$row['idFinca']."'>".$row['nombre']."</option>";
      					}
  return $cad;

		}

<<<<<<< HEAD
//consulta   select count(idLote) from lote group by (idFinca)
		function ListarFincasTabla($idUsuario)
		{
          $usuario = new Usuario();
					$usuarioDAO = new Usuario_DAO();
					$usuario->setidUsuario($idUsuario);
					$nombres = $usuarioDAO->infoUsuario($usuario);
					$nombre = $usuarioDAO->getArray($nombres);
					$finca=new Finca();
					$fincaDAO=new Finca_DAO();
					$finca->setidUsuario($idUsuario);
					$resultado=$fincaDAO->ListarFincas($finca);
					$loteDAO = new Lote_DAO();

					$tabla = "";

					while($row=$fincaDAO->getArray($resultado))
					{
  					$lotes = $loteDAO->lotesxFinca($row['idFinca']);
						$lote = $loteDAO->getArray($lotes);
						$editar = '<a href='.$row['idFinca'].'\" data-toggle=\"modal\" data-target=\"#modalEFinca\" type=\"submit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';

						$eliminar = '<a href=\"controlador/eliminarFinca.php?id='.$row['idFinca'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminar esta finca?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

						$tabla.='{
								  "propietario":"'.$nombre['nombre'].'",
								  "finca":"'.$row['nombre'].'",
								  "Ciudad":"'.$row['Ciudad'].'",
								  "departamento":"'.$row['departamento'].'",
									"lotes":"'.$lote['lotes'].'",
								  "acciones":"'.$editar.$eliminar.'"
								},';
      		}

								$tabla = substr($tabla,0, strlen($tabla) - 1);

								return $tabla;



		}


		function eliminarFinca($idFinca){
			$finca = new Finca();
			$fincaDao = new Finca_DAO();
			$finca->setidFinca($idFinca);
			$result = $fincaDao->eliminarFinca($finca);
			echo "finca eliminada";
		}




		function ListarLotesTabla($idUsuario)
		{

					$finca=new Finca();
					$fincaDAO=new Finca_DAO();
					$finca->setidUsuario($idUsuario);
					$result=$fincaDAO->ListarFincas($finca);



					$tabla = "";
					while ($fincas=$fincaDAO->getArray($result))
					{

						$loteDAO=new Lote_DAO();
						$resultado=$loteDAO->ListarLotes($fincas['idFinca']);


					while($row=$loteDAO->getArray($resultado))
					{
            if($fincas['idFinca']==$row['idFinca'])
						{
						$editar = '<a href=\"edicionLote.php?a='.$row['estadofenologico'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
						$eliminar = '<a href=\"controlador/eliminarLote.php?id='.$row['idLote'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminar esta finca?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

						$tabla.='{
									"finca":"'.$fincas['nombre'].'",
								  "idLote":"'.$row['idLote'].'",
								  "lote":"'.$row['nombre'].'",
								  "medida":"'.$row['medida'].'",
									"ubicacion":"'.$fincas['Ciudad'].'",
									"fecha":"'.$row['fecha'].'",
									"estadofenologico":"'.$row['estadofenologico'].'",
								  "acciones":"'.$editar.$eliminar.'"
								},';
						}
      		}

					}

								$tabla = substr($tabla,0, strlen($tabla) - 1);

								return $tabla;



		}

		function eliminarLote($idLote){
			$Lote = new Lote();
			$LoteDao = new Lote_DAO();
			$Lote->setidLote($idLote);
			$result = $LoteDao->eliminarLote($Lote);
			echo "Lote eliminada";
		}

=======
>>>>>>> de8ea11bdfd548fe90ba88fd07c569b35568951c



	/**
	 *
	 * @param nombre
	 * @param idFinca
	 */
<<<<<<< HEAD
	function registrarLote($nombre, $medida, $fecha, $idFinca,$estadoF)
	{

		$lote = new Lote();
		$loteDAO = new Lote_DAO();
		$lote->setnombre($nombre);
		$lote->setmedida($medida);
		$lote->setfecha($fecha);
		$lote->setFinca($idFinca);
		$lote->setestadoF($estadoF);
		$result=$loteDAO-> AgregarLote($lote);
=======
	function registrarLote($nombre, $medida, $fecha, $idFinca)
	{
		$lote = new Lote();
		$loteDAO = new Lote_DAO();
		$lote->setNombre($nombre);
		$lote->setMedida($ciudad);
		$lote->setfecha($departamento);
		$lote->setidusuario($idFinca);
		$result=$floteDAO-> AgrgarLote($finca);
>>>>>>> de8ea11bdfd548fe90ba88fd07c569b35568951c

		if($result!=true){
				echo 'Error al registrar Finca';
		}
		else {
				echo 'Registro Exitoso';
		}

	}

	/**
	 *
	 * @param medida
	 * @param estado
	 * @param funcion
	 * @param nombre
	 * @param azufre
	 * @param nitrgeno
	 * @param fosforo
	 * @param potasio
	 * @param detalle
	 */
	function registrarFertilizante($medida, $estado, $funcion, $nombre, $azufre, $nitrgeno, $fosforo, $potasio, $detalle)
	{
	}

	/**
	 *
	 * @param zinc
	 * @param manganesio
	 * @param ph
	 * @param calcio
	 * @param magnesio
	 * @param potasio
	 * @param fosforo
	 * @param nitrogeno
	 * @param idLote
	 */
	function ingresarAnalisisdeSuelo($zinc, $manganesio, $ph, $calcio, $magnesio, $potasio, $fosforo, $nitrogeno, $idLote)
	{
	}

	/**
	 *
	 * @param potasio
	 * @param fosforo
	 * @param nitrogeno
	 * @param estado
	 * @param nombre
	 * @param funcion
	 * @param azufre
	 * @param zinc
	 */
	function registrarFertilizant($potasio, $fosforo, $nitrogeno, $estado, $nombre, $funcion, $azufre, $zinc)
	{
	}

}

?>
