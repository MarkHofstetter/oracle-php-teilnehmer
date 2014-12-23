<?php
abstract class DB
{
	private $id;
	private $name;
	//von aussen nicht sichtbar, aber von abgeleiteten Klassen schon, alsoo Zwischending zw private und public
	protected $config;
	protected $db;
	
	
	/*Construct Funktion, beim Instanziieren eines Objekts, da passiert gleich was, 
	immer wenn Objekt gemacht wird, wird das aufgerufen
	macht also neue DB Verbindung keine gute Idee
	*/
	function __construct ($config)
	{
		$this->config=$config;
	}

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

