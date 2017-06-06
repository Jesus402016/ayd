<?php

/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:11:22 p.m.
 */
class Usuario
{

	var $Nombre;
	var $cedula;
	var $correo;
	var $ciudad;
	var $departamento;
	var $telefono;
	var $idUsuario;
	var $ocupacion;
	var $contrasena;
	

	function Usuario()
	{
	}


	/**
	 * 
	 * @param nombre
	 * @param idUsuario
	 * @param ciudad
	 */
	function registrarFinca($nombre, $idUsuario, $ciudad)
	{
	}

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

	function getciudad()
	{
		return $this->ciudad;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setciudad($newVal)
	{
		$this->ciudad = $newVal;
	}

	function getdepartamento()
	{
		return $this->departamento;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setdepartamento($newVal)
	{
		$this->departamento = $newVal;
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

	function getidUsuario()
	{
		return $this->idUsuario;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidUsuario($newVal)
	{
		$this->idUsuario = $newVal;
	}

	function getocupacion()
	{
		return $this->ocupacion;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setocupacion($newVal)
	{
		$this->ocupacion = $newVal;
	}
   

   	function getcontrasena()
	{
		return $this->ocupacion;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcontrasena($newVal)
	{
		$this->contrasena = $newVal;
	}
}
?>