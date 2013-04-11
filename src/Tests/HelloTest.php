<?php

//require_once './src/Hello.php';

require_once './src/Tests/bootstrap.php';

class HelloTest extends PHPUnit_Framework_TestCase {
	
	public function testWorld() {
		$hello = new Hello();
		$this->assertEquals('Hello World', $hello->world());
	}
	
}