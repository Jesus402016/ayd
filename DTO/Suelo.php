<?php


/**
 * @author Gamez
 * @version 1.0
 * @created 05-jun-2017 04:11:22 p.m.
 */
class Suelo
{

	var $nitrogeno;
	var $fosforo;
	var $potasio;
	var $magnesio;
	var $calcio;
	var $ph;
	var $manganesio;
	var $zinc;
	var $idSuelo;
	var $lote;
	

	function Suelo()
	{
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

	function getlote()
	{
		return $this->lote;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setlote($newVal)
	{
		$this->lote = $newVal;
	}

}
?>