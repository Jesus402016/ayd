<?php


/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:11:22 p.m.
 */
class Finca
{

	var $nombre;
	var $ciudad;
	var $idFinca;
	var $idUsuario;
	var $departamento;

	function Finca()
	{
	}



	/**
	 *
	 * @param idLote
	 * @param nombre
	 * @param usuario
	 */
	function ginca($idLote, $nombre, $usuario)
	{
	}

	/**
	 *
	 * @param idFinca
	 */
	function regisrarLote($idFinca)
	{
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

	function getnombre()
	{
		return $this->nombre;
	}

	/**
	 *
	 * @param newVal
	 */
	function setnombre($newVal)
	{
		$this->nombre = $newVal;
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

	function getidFinca()
	{
		return $this->idFinca;
	}

	/**
	 *
	 * @param newVal
	 */
	function setidFinca($newVal)
	{
		$this->idFinca = $newVal;
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

}
?>
