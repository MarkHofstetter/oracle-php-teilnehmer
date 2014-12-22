<?php

abstract class DB {
   private $id;
   private $name;
   var $dateformat = 'Y-m-d';   
   
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