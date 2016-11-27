<?php
/*
继承
*/
header('Content-Type:text/html;charset=utf-8');

class Human{
	private $wife = '小甜甜';
	public function tell(){
		echo $this->wife,'<br />';	
	}

	public function cry(){
		echo '5555<br />';
	}
}

class Stu extends Human{
	public function subtell(){
		echo $this->wife;
	}

}

$lisi = new Stu();

$lisi -> cry();
$lisi -> tell();
$lisi -> subtell(); //不能调用，因为子类不没有wife

/*
未定义的属性,wifi属性
私有属性，可以理解不能继承
（其实是能继承过来，只不过无法访问）
public protected private中，
public protected 都可以继承，并拥有访问和修改的权限
这就好比说，家产已经了，愿意卖就卖
*/


?>

