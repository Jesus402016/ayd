<?php


/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:11:22 p.m.
 */
class Medida
{

	var $nombre;
	var $idMedida;

	function Medida()
	{
	}



	/**
	 * 
	 * @param idMedida
	 * @param nombre
	 */
	function Medida($idMedida, $nombre)
	{
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

	function getidMedida()
	{
		return $this->idMedida;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidMedida($newVal)
	{
		$this->idMedida = $newVal;
	}

}
?>