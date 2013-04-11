<?php

require_once 'Hello.php';

class HelloTest extends PHPUnit_Framework_TestCase {
	
	public function testWorld() {
		$hello = new Hello();
		$this->assertEquals('Hello World', $hello->world());
	}
	
}