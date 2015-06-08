<?php
header('Content-Type:text/html;charset=utf-8');

class Human{
	public function __construct($name, $gender){
		$this->name = $name;  //属性调用的时候不加'$'
		$this->gender = $gender;

	}

//PHP中构造函数不能重载
/*
	public function __construct($name, $gender, $age){
		$this->name = $name;
		$this->gender = $gender;
		echo 'construct';
	}

*/


	public $name = null;
	public $gender = null;
	public $age = null;

	public function Say(){
		echo 'Hello, My name is',$this->name,'  My Sex is',$this->gender;  //函数内调用必须使用$this
	}


//PHP函数也不能被重载
/*

	public function Say($hi){
		echo 'Hello, My name is',$this->name,'  My Sex is',$this->gender;  //函数内调用必须使用$this
		echo '<br />', $hi;
	}
*/
}

$p1 = new Human('牛xx', '男');
$p2 = new Human('空姐', '女');
//$p3 = new Human('小xx', '男', 18) 
$p4 = new Human('性感小姐', '女');

$p1->Say();
echo '<br />';
$p2->Say();
echo '<br />';
//$p3->Say();  //Fatal error: Cannot redeclare Human::__construct()
$p4->Say(21);



?>
