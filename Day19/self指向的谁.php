<?php
header('Content-Type:text/html; charset=utf-8');
class testClass{
	public static $count = 0;
	public $num = 0;

	function __construct(){
		self::$count ++;
		$this->num++;
	}


	function display(){
		echo self::$count,'<br />';
		echo $this->num, '<br />';
	}
}


$oTest1 = new testClass();
$oTest1->display();  //输出1,1


$oTest2 = new testClass();
$oTest2->display(); //输出2，1


/*
上面例子中self::$cout始终指向该类本身，而$num是单独存在于各个具体实例中的。
总结：

　　$this 指向当前的实例

　　$parent 是父类的引用

　　self 对当前类本身的一个引用
*/


?>
