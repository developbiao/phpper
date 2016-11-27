<?php
/*
PHP和java,c++相比
方法体内想访问 调用者的属性，必须用$this,如果不加，则理解为方法内部的一个局部变量。
*/
header('Content-Type:text/html;charset=utf-8');

class Human{


	public $name = 'nobody';

	public function Say(){
		echo 'Hello, My Name is',$this->name,'<br />';
	}

}

$p1 = new Human();
$p1->Say();



?>
