<?php 

class Singleton {
  var $x = 5;
  
  public static function getInstance() {    
	static $instance = null;
	echo "here\n";
	
	if ($instance === null) {
      $instance = new static();	  
	  echo "here inside\n";
	  $x++;
    }

    return $instance;
  } 	

}