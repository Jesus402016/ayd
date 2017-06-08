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

		function listarFincas($idUsuario){
			   return $this->OpUsuario->listarFincas($idUsuario);
		}

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



	/**
	 *
	 * @param nombre
	 * @param idFinca
	 */
	function registrarLote($nombre, $medida, $fecha, $idFinca)
	{
		return $this->OpUsuario->registrarLote($nombre, $medida, $fecha, $idFinca);
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
