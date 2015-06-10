<?php
header('Content-Type:text/html; charset=utf-8');
/*
静态方法
*/
 class Human{
	public $name = '张三';

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


Human::cry(); //静态调用方法

Error_reporting(E_ALL|E_STRICT);// 开启报错

Human::etc(); //调用非静态的方法则会提示:Strict Standards: Non-static method Human::eat() should not be called statically 

/*
类->访问->静态方法 可以
类->动态方法  方法内没有this的情况下,但严重不支持.逻辑上解释不通.

对象-->访问动态方法  可以
对象-->静态方法     可以
*/





?>

