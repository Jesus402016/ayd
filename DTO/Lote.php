<?php


/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:11:22 p.m.
 */
class Lote
{

	var $Finca;
	var $idLote;
	var $nombre;

	function Lote()
	{
	}



	
	function getFinca()
	{
		return $this->Finca;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setFinca($newVal)
	{
		$this->Finca = $newVal;
	}

	function getidLote()
	{
		return $this->idLote;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidLote($newVal)
	{
		$this->idLote = $newVal;
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

}
?>