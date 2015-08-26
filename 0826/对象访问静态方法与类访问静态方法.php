<?php
/*
php中的多态practice
*/
header('Content-Type:text/html; charset=utf-8');
/*
静态方法
*/
 class Human{
	public $name = '张三';
	public static $money = 3000;
	static public function cry(){
		echo '5555555<br />';
	}
	public function etc(){
		echo '吃饭<br />';
	}
	public function intro(){
		echo '找不到工作';
		//echo $this->name;
	}
}


$p1 = new Human();
$p1->cry(); //对象访问静态方法可以
Human::cry(); //类访问静态方法可以

echo '<hr />';
echo $p1::$money, '<br />';
echo Human::$money, '<br />';







echo '<h3>Program runing is ok!</h3>';

?>
