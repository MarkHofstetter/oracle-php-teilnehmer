<?php

class Config {
  var $dateformat = 'Y-m-d';
  var $username = 'hr';
  var $password = 'hr';
  var $connectstring = 'kurs2.wifi';
  var $db;
  
  #konstruktor
  function __construct () {
    $this->connect();	
  }
  
  function connect() {
    $this->db = oci_connect($this->username,
	                        $this->password,
					        $this->connectstring);
  }

}