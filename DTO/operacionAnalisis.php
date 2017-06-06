<?php

/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:11:22 p.m.
 */
class operacionAnalisis
{

	var $Usuario;
	var $idFertilizante;
	var $nitrogeno;
	var $fosforo;
	var $potasio;
	var $magnesio;
	var $calcio;
	var $ph;
	var $zinc;
	

	function operacionAnalisis()
	{
	}


	function getUsuario()
	{
		return $this->Usuario;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setUsuario($newVal)
	{
		$this->Usuario = $newVal;
	}

	function getidFertilizante()
	{
		return $this->idFertilizante;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidFertilizante($newVal)
	{
		$this->idFertilizante = $newVal;
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

	function getmagnesio()
	{
		return $this->magnesio;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setmagnesio($newVal)
	{
		$this->magnesio = $newVal;
	}

	function getcalcio()
	{
		return $this->calcio;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcalcio($newVal)
	{
		$this->calcio = $newVal;
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

}
?>