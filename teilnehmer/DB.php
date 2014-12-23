<?php

abstract class DB {
   private $id;
   private $name;   
   protected $config;
   protected $db;
   
   function __construct ($config) {
     $this->config = $config;	 
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
    
}