<?php
abstract class DB
{
	var $id;
	var $name;		
	//Eine Methode der Klasse
	function print_name()
	{
	//Eine methode spricht von sich selbst: this
		printf ("the name is %s\n", $this->name);
	}
}

