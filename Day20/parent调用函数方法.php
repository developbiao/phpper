<?php
header('Content-Type:text/html; charset=utf-8');

class Human{
	protected $age = 23;
	public function say(){
		echo $this->age,'<br />';
	}
}

class Stu extends Human{
	protected $age = 15;

	public function say1(){
		$this->say();
	}

	public function say2(){
		parent::say();
	}
	public function say3(){
		parent::say();
	}
}


$ming = new Stu();

print_r($ming);

$ming->say1();
$ming->say2();
$ming->say3();
?>
