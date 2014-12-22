<?php

class DB {
  var $id;
  var $name;
  
  function print_name() {
    printf("The name is %s\n", $this->name);
  }

}