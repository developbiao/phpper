<?php
/*
玩一玩构造器初始化参数
*/
header('Content-Type:text/html; charset=utf-8');

class Stu{
	private $name;
	private $age;
	public function __construct($name, $age){ 
		$this->name = $name;
		$this->age = $age;
	}		


	public function SayHello(){
		echo '<h3>Hello My name is',$this->name,'－－－我今年',$this->age,'岁了!</h3>';
	}
}


$woogi = new Stu('小woogi', 5);
$woogi->SayHello();






?>
