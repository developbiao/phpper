<?php
header('Content-Type:text/html; charset=utf-8');
class Test{
	protected $name = 'xxx张';

	public function getName(){
		echo $this->name;
	}
}

$test = new Test();
$test->getName();
?>