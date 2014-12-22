<?php
abstract class DB
{
	//Variante mit Variablen ohne getter und setter
	//var $id;
	//var $name;
	//var $height;
	var $dateformat='Y-m-d';
	private $id;
	private $name;
	
	function getName()
	{
		return $this->name;
	}
	
	function setName($value)
	{
		$this->name=$value;
	}
	
	//Eine Methode der Klasse, functions sind per default public
	function print_name()
	{
	//Eine Methode spricht von sich selbst: this
		printf ("the name is %s\n", $this->name);
	}
}

