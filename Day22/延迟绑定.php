<?php
/*
后期绑定/延迟绑定
*/
header("Content-Type:text/html; charset=utf-8");

class Human{
	public static function whoami(){
		echo '来自父类的whoami在执行<br />';
	}

	public static function say(){
		self::whoami(); //子类内没有say方法，找到父类这里 self是指父类
	}

	public static function say2(){
		static::whoami(); //子类也没有say2方法，又找到父类这里
							//但是父类用static::whoami
							//指调用你子类自己的whoami方法
	}
}

class Stu{
	public static function whoami(){
		echo '来自子类的whoami在执行<br />';
	}
}


Stu::say();
Stu::say2();
?>
