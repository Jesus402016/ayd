<?php

/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:18:38 p.m.
 */

include_once '../DTO/Usuario.php';
include_once '../DAO/Usuario_DAO.php';
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
	function registrarUsuario($ciudad, $contraseña, $ocupacion, $correo, $telefono, $Nombre, $cedula)
	{
		$Usuario= new Usuario();
		$UsuarioDAO= new Usuario_DAO();
		$Usuario->setNombre($Nombre);
		$Usuario->setciudad($ciudad);
		$Usuario->setcorreo($correo);
		$Usuario->setocupacion($ocupacion);
		$Usuario->settelefono($telefono);
		$Usuario->setcedula($cedula);
		$result=$UsuarioDAO-> AgregarUsuario($Usuario);
        
        if($result!=true){
            echo 'Error al registrar Cliente';
        }
        else {
            echo 'Registro Exitoso';
        }

	}

	/**
	 * 
	 * @param ciudad
	 * @param idUsuario
	 * @param nombre
	 */
	function registrarFinca($ciudad, $idUsuario, $nombre)
	{
	}

	/**
	 * 
	 * @param nombre
	 * @param idFinca
	 */
	function registrarLote($nombre, $idFinca)
	{
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