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
	var $medida;
	var $fecha;
	var $estadoF;


	function Lote()
	{
	}



	function getmedida()
	{
		return $this->medida;
	}

	/**
	 *
	 * @param newVal
	 */
	function setmedida($newVal)
	{
		$this->medida = $newVal;
	}

	function getestadoF()
	{
		return $this->estadoF;
	}

	/**
	 *
	 * @param newVal
	 */
	function setestadoF($newVal)
	{
		$this->estadoF = $newVal;
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


	function getfecha()
	{
		return $this->fecha;
	}

	/**
	 *
	 * @param newVal
	 */
	function setfecha($newVal)
	{
		$this->fecha = $newVal;
	}

}
?>
