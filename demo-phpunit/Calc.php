<?php

class Calc {

  public $field = array();
  
  function sum() {
    $sum = 0;
	foreach ($this->field as $summand) {
	  if (!is_numeric($summand)) {
	    throw(new Exception("$summand is not numeric"));
	  }
	  $sum += $summand;
	}
	return $sum;
  }

}