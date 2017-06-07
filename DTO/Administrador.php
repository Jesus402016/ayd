<?php

/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:11:22 p.m.
 */
class Administrador
{

	var $Nombre;
	var $cedula;
	var $correo;
	var $telefono;
	var $idAdministrador;
	var $contrasena;


	function Administrador()
	{
	}


	/**
	 *
	 * @param nombre
	 * @param idUsuario
	 * @param ciudad
	 */


	function getNombre()
	{
		return $this->Nombre;
	}

	/**
	 *
	 * @param newVal
	 */
	function setNombre($newVal)
	{
		$this->Nombre = $newVal;
	}

	function getcedula()
	{
		return $this->cedula;
	}

	/**
	 *
	 * @param newVal
	 */
	function setcedula($newVal)
	{
		$this->cedula = $newVal;
	}

	function getcorreo()
	{
		return $this->correo;
	}

	/**
	 *
	 * @param newVal
	 */
	function setcorreo($newVal)
	{
		$this->correo = $newVal;
	}





	function gettelefono()
	{
		return $this->telefono;
	}

	/**
	 *
	 * @param newVal
	 */
	function settelefono($newVal)
	{
		$this->telefono = $newVal;
	}

	function getidAdministrador()
	{
		return $this->idAdministrador;
	}

	/**
	 *
	 * @param newVal
	 */
	function setidAdministrador($newVal)
	{
		$this->idAdministrador = $newVal;
	}






   	function getpassword()
	{
		return $this->password;
	}

	/**
	 *
	 * @param newVal
	 */
	function setpassword($newVal)
	{
		$this->password = $newVal;
	}
}
?>
