<?php
require_once('DB.php');
class DB_Teilnehmer extends DB
{
	private $height;
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
		return $this->birthday->format($this->config->dateformat);
	}
	
	function setBirthday(DateTime $value)
	{
		$this->birthday=$value;
	}
	
	
	//Teilnehmer nach dem Namen raussuchen
	function readByName($name)
	{
			$q = oci_parse($this->config->db, 
			"select tln_name, 
			to_char(tln_birthday, 'yyyy-mm-dd'),
			tln_height,
			tln_gen_id
			from teilnehmer
			where tln_name =:tln_name");

			oci_bind_by_name($q,":tln_name", $name);
			$r = oci_execute($q, OCI_DEFAULT);

			while ($row= oci_fetch_array($q, OCI_NUM))
			{
				$this->setName($row[0]);
				$this->setBirthday(DateTime::createFromFormat('Y-m-d',$row[1]));
				$this->setHeight($row[2]);
				$gender=new DB_Gender($this->config);
				//hier wird die folgende Variable übergeben and die gender.php:
				$gender->readById($row[3]);
				$this->setGender($gender);
			}
	}	
}