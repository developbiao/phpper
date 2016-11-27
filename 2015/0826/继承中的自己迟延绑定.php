<?php
/*
延迟绑定
总结：
self::function(); 调用父类的方法
static::function(); 调用自己的方法 
*/
header('Content-Type:text/html; charset=utf-8');
class Animal{
	const age = 1;
	public static $leg = 4;
	public static function cry(){
		echo '呜呜~~~<br />';
	}
	public static function t1(){
		self::cry();
		echo self::age,'<br />';
		echo self::$leg, '<br />';
	}
	public static function t2(){
		static::cry();
		echo static::age,'<br />';
		echo static::$leg,'<br />';
	}

}


class Human extends Animal{
	public static $leg = 2;
	public static function cry(){
		echo '哇哇~~~~<br />';
	}
}


class Stu extends Human{
	const age = 16;
	public static function cry(){
		echo '嘤嘤~~~<br />';
	}

}
Stu::t1(); //呜呜,1,4
Stu::t2(); //嘤嘤，16，2
Stu::t3();



echo '<h3>Program runing is ok!</h3>';

?>
