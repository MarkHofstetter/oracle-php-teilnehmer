<?php

require_once('DB.php');

class DB_Teilnehmer extends DB {
  private $height;
  private $gender;
  private $birthday;
  
  function getHeight() {
     return $this->height;
  }
   
  function setGender(DB_Gender $value) {     
	 $this->gender = $value;
  }
  
  function getGender() {
     return $this->gender;
  }
   
  function setHeight($value) {     
	 $this->height = $value;
  }
  
  function getBirthday() {
     return $this->birthday;
  }
  
  function getBirthdayAsString() {
     return $this->birthday->format($this->config->dateformat);
  }
  
  function setBirthday(DateTime $value) {     
	 $this->birthday = $value;
  }
  
  function readByName($name) {
    $q = oci_parse($this->config->db, 
      "select tln_name, 
          to_char(tln_birthday, 'yyyy-mm-dd') birthday,
		  tln_height,
		  tln_gen_id		  
		  from teilnehmer where tln_name = :tln_name");

    oci_bind_by_name($q, ":tln_name",  $name );		  

    $r = oci_execute($q, OCI_DEFAULT);
    
	$row = oci_fetch_array($q, OCI_ASSOC);
    $this->setName($row['TLN_NAME']);
	$this->setBirthday(
	   DateTime::createFromFormat('Y-m-d', $row['BIRTHDAY']));
    $this->setHeight($row['TLN_HEIGHT']);
	$gender = new DB_Gender($this->config);
	$gender->readById($row['TLN_GEN_ID']);
	$this->setGender($gender);
    
  }
}