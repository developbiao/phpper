<?php
header('Content-Type:text/html; charset=utf-8');
/*
静态变量
*/
class Human{
	static public $head = 1;

	public function changeValue(){
		Human::$head = 2;
	}
}

echo Human::$head,'<br />';
$p1 = new Human();
$p1->changeValue();
echo Human::$head, '<br />';



?>

