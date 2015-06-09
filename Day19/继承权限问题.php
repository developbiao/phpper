<?php
/*
学习笔记：
*/
header('Content-Type:text/html; charset=utf-8');

class Human(){
	public function __construct(){
		echo '呱呱坠地！<br />';
	}
}


class Stu extends Human{

}


$p1 = new Stu();


?>

