<?php

abstract class DB {
   var $id;
   var $name;   
   
   function print_name() {
     printf("the name is %s\n", $this->name);
   }

}