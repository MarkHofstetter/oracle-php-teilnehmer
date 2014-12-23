<?php

abstract class DB {
  private $id;
  private $name;
  protected $config;
  protected $db;
  
  #konstruktor
  function __construct ($config) {
    $this->config = $config;	
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

}