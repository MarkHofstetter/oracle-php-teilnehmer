<?php

abstract class DB {
  private $id;
  private $name;
  var $dateformat = 'Y-m-d';
  
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

}