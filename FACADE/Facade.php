<?php

/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:18:38 p.m.
 */
include_once '../NEGOCIO/OpUsuario.php';
class Facade
{

	private $OpUsuario;
	static $_instance;

	function __construct() {
       $this->OpUsuario =new OpUsuario();
   }

   private function __clone(){ }

   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }


	 	function validarLogin($usuario,$password,$rol){
         return $this->OpUsuario->validarLogin($usuario,$password,$rol);
		}

<<<<<<< HEAD
		function listarUsuarios(){
         return $this->OpUsuario->listarUsuarios();
		}



		function listarFincas($idUsuario){
			   return $this->OpUsuario->listarFincas($idUsuario);
		}

		function listarFincasTabla($idUsuario){
			   return $this->OpUsuario->listarFincasTabla($idUsuario);
		}

		function listarLotesTabla($idUsuario){

			   return $this->OpUsuario->listarLotesTabla($idUsuario);
		}

		function listarFertilizantesUsuarioTabla($idUsuario){

				 return $this->OpUsuario->listarFertilizantesUsuarioTabla($idUsuario);
		}

		function eliminarFinca($idFinca){

				return $this->OpUsuario->eliminarFinca($idFinca);
		}

		function eliminarLote($idLote){

				return $this->OpUsuario->eliminarLote($idLote);
		}
=======
		function listarFincas($idUsuario){
			   return $this->OpUsuario->listarFincas($idUsuario);
		}
>>>>>>> de8ea11bdfd548fe90ba88fd07c569b35568951c

	/**
	 *
	 * @param ciudad
	 * @param contrase�a
	 * @param ocupacion
	 * @param correo
	 * @param telefono
	 * @param Nombre
	 * @param cedula
	 */
	function registrarUsuario($ciudad, $contrasena, $ocupacion, $correo, $telefono, $Nombre, $cedula)
	{
		return $this->OpUsuario->registrarUsuario($ciudad, $contrasena, $ocupacion, $correo, $telefono, $Nombre, $cedula);
	}

	/**
	 *
	 * @param ciudad
	 * @param idUsuario
	 * @param nombre
	 */
	function registrarFinca($ciudad, $nombre, $departamento,$idusuario)
	{
		return $this->OpUsuario->registrarFinca($ciudad, $nombre, $departamento,$idusuario);
	}


<<<<<<< HEAD
	function editarFinca($nombre,$idFinca)
	{
		return $this->OpUsuario->editarFinca($nombre,$idFinca);
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
		return $this->OpUsuario->registrarLote($nombre, $medida, $fecha, $idFinca,$estadoF);
=======
	function registrarLote($nombre, $medida, $fecha, $idFinca)
	{
		return $this->OpUsuario->registrarLote($nombre, $medida, $fecha, $idFinca);
>>>>>>> de8ea11bdfd548fe90ba88fd07c569b35568951c
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

}
	?>
