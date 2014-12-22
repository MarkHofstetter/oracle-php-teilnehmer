<?php

abstract class DB {
   private $id;
   private $name;
   var $dateformat = 'Y-m-d';   
   var $username = 'hr';
   var $password = 'hr';
   var $connectstring = 'kurs2.wifi';
   var $db;
   
   function __construct () {
     $this->connect();
   }
	    
   function getName() {
     return $this->name;
   }
   
   function setName($value) {     
	 $this->name = $value;
   }
   
   function print_name() {
     printf("the name is %s\n", $this->name);
   }

   function connect() {
     $this->db = oci_connect($this->username, 
	                         $this->password,
							 $this->connectstring);
   }
   
    
}