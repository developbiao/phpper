<?php

/*
1、关于PHP中的类，请注意，属性必须是一个“直接的值”是8t种类型任意的“值”
不能是:表达式1+2的值
不能是:函数的返回值time();
这点和java不一样

*/

class Human{
	public $age = 3;
	//public $age = 3+2;
}

$xiaowu = new Human();
echo $xiaowu->age,'<br />';

class People{
	public $age;
}

$kala = new People();
var_dump($b->age);
?>
