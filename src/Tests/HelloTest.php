<?php

require_once './src/Hello.php';

class HelloTest extends PHPUnit_Framework_TestCase {
	
	public function testWorld() {
		$hello = new Hello();
		$this->assertEquals('Hello World', $hello->world());
	}
	
}