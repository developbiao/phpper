<?php
header('Content-Type:text/html; charset=utf-8');
/*
上面例子中，$this->display();   其实就是 $otestClass1->nick，因此$this究竟指向哪是由所实例化的对象决定的，指向当前对象实例的指针。包括变量、方法都是如此
*/

class testClass{
	var $nick = '';

	public function __construct($nick){
		$this->nick = $nick;
	}

	public function Display(){
		echo $this->nick;

	}
}

$otherClass1 = new testClass('frank');
$otherClass1->Display();   //显示frank
?>
