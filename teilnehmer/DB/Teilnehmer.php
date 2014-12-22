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
     return $this->birthday->format($this->dateformat);
  }
  
  function setBirthday(DateTime $value) {     
	 $this->birthday = $value;
  }
  
}