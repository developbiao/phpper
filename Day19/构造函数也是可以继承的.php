<?php
/*
学习笔记：
构造函数也是可以继承的
*/
header('Content-Type:text/html; charset=utf-8');

class Human{
	public function __construct(){
		echo '呱呱坠地！<br />';
	}
}


class Stu extends Human{

	public function __construct(){
		echo '金光满层三天不散<br />';
	}

}


$p1 = new Stu();   


?>


