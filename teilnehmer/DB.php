<?php

abstract class DB {
  private $id;
  private $name;
  var $dateformat = 'Y-m-d';
  var $username = 'hr';
  var $password = 'hr';
  var $connectstring = 'kurs2.wifi';
  var $db;
  
  #konstruktor
  function __construct () {
    $this->connect();	
  }
  
  #get
  function getName() {
    return $this->name;
  }
 
  #set
  function setName($value) {
    $this->name = $value;
  }
 
  function print_name() {
    printf("The name is %s\n", $this->name);
  }

  function connect() {
    $this->db = oci_connect($this->username,
	                        $this->password,
							$this->connectstring);
  }

}