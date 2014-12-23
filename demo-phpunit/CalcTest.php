<?php

require('Calc.php');

# Aufruf mit "phpunit CalcTest.php"

class CalcTest extends PHPUnit_Framework_TestCase {
  
  function testAdd() {
    $calc =new Calc;
	$calc->field = array(3,4,5);
	$sum = $calc->sum();
	$this->assertEquals(12,$sum);
	
	$calc->field = array();
	$sum = $calc->sum();
	$this->assertEquals(0,$sum);

	$calc->field = array(-1,3);
	$sum = $calc->sum();
	$this->assertEquals(2,$sum);
  }
  
  /**
     * @expectedException        Exception
	 * @expectedExceptionMessage a is not numeric
  */
  
  function testExceptionHasRightMessage() {
    $calc =new Calc;
	$calc->field = array(-1,'a');
	$sum = $calc->sum();
  }
}