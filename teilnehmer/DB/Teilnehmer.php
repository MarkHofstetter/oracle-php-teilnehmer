<?php
require_once('DB.php');
class DB_Teilnehmer extends DB
{
	private $height;
	//Variante mit Variablen ohne getter und setter
	//var $gender;
	//var $birthday;
	private $gender;
	private $birthday;
	
	function getHeight()
	{
		return $this->height;
	}
	
	function setHeight($value)
	{
		$this->height=$value;
	}
	
	
	
	function getGender()
	{
		return $this->gender;
	}
	
	function setGender(DB_Gender $value)
	{
		$this->gender=$value;
	}
	
	
	
	function getBirthday()
	{
		return $this->birthday;
	}
	
	//Typ datetime variable ist einzig zulässig, Typisierung einer Eigenschaft
		
	function getBirthdayString()
	{
		return $this->birthday->format($this->dateformat);
	}
	
	function setBirthday(DateTime $value)
	{
		$this->birthday=$value;
	}
	
}

