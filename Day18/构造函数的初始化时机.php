<?php
header('Content-Type:text/html;charset=utf-8');

class Human{
	public function __construct(){
		echo '想你呼呼!';   //构造函数

	}
	public $name = '小王';
	public $gender = '男';
}

$a = new Human();
$b = new Human();
$c = new Human();

/*
echo $a->name, '<br />';
echo $b->name,'<br />';
echo $c->name,'<br />';
*/

?>
