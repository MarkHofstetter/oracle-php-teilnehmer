<?php

require_once('DB.php');

class DB_Teilnehmer extends DB {
  private $height;
  private $gender;
  private $birthday;
  
   #get
  function getHeight() {
    return $this->height;
  }
   #get
  function getGender() {
    return $this->gender;
  }
   #get
  function getBirthday() {
    return $this->birthday;
  }

   #get
  function getBirthdayAsString() {
    #return $this->birthday->format('Y-m-d') ."\n";
    return $this->birthday->format($this->dateformat);
  }
  
  #set
  function setHeight($value) {
    $this->height = $value;
  }

  #set
  function setGender(DB_Gender $value) {
    $this->gender = $value;
  }

  #set
  function setBirthday(DateTime $value) {
    $this->birthday = $value;
  }

}