<?php


/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:11:22 p.m.
 */
class Fertilizante
{

	var $nombre;
	var $estado;
	var $funcion;
	var $nitrogeno;
	var $fosforo;
	var $potasio;
	var $azufre;
	var $manganesio;
	var $zinc;
	var $ph;
	var $medida;
	var $m_Medida;

	function Fertilizante()
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

	function getestado()
	{
		return $this->estado;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setestado($newVal)
	{
		$this->estado = $newVal;
	}

	function getfuncion()
	{
		return $this->funcion;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setfuncion($newVal)
	{
		$this->funcion = $newVal;
	}

	function getnitrogeno()
	{
		return $this->nitrogeno;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnitrogeno($newVal)
	{
		$this->nitrogeno = $newVal;
	}

	function getfosforo()
	{
		return $this->fosforo;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setfosforo($newVal)
	{
		$this->fosforo = $newVal;
	}

	function getpotasio()
	{
		return $this->potasio;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setpotasio($newVal)
	{
		$this->potasio = $newVal;
	}

	function getazufre()
	{
		return $this->azufre;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setazufre($newVal)
	{
		$this->azufre = $newVal;
	}

	function getmanganesio()
	{
		return $this->manganesio;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setmanganesio($newVal)
	{
		$this->manganesio = $newVal;
	}

	function getzinc()
	{
		return $this->zinc;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setzinc($newVal)
	{
		$this->zinc = $newVal;
	}

	function getph()
	{
		return $this->ph;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setph($newVal)
	{
		$this->ph = $newVal;
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

}
?>