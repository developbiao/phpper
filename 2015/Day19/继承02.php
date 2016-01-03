<?php
/*
学习笔记
继承时，继承来Protected/public 属性、方法
完全继承过来，属性子类。
继承来父类private属性/方法但不能操作
*/
header('Content-Type:text/html;charset=utf-8');

class Human{ //父类
	private $wife = '小甜甜';

	public $age = 22;
	public function tell(){
		echo $this->wife,'<br />';	
	}

	public function cry(){
		echo '5555<br />';
	}

	public function Work(){
		echo '教学生<br />';
	}
}

class Stu extends Human{
	private $wife = '美女老师';
	public $height = 170;
	public function subtell(){
		echo $this->wife,'<br />';
	}

	//子类自己的工作
	public function SWork(){
		parent::Work();   //继承父的工作
		echo '<br /> 打铁'; //自己又会打铁
	}

}

$lisi = new Stu();

$lisi -> subtell();
$lisi -> SWork();

echo '<pre>';
print_r($lisi);
echo '</pre>';



?>

