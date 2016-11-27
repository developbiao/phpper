<?php
header('Content-Type:text/html; charset=utf-8');

class Animal{
	const age = 1;
	public static $leg = 4;

	public static function cry(){
		echo '呜呜~<br />';
	}

	public static function eat(){
		echo '啃生肉~<br />';
	}

	public static function t1(){
		self::cry();
		self::eat();
		echo self::age, '<br />';
		echo self::$leg, '<br />';
	}

	public function t2(){
		static::cry();
		static::eat();
		echo static::age, '<br />';
		echo static::$leg, '<br />';
	}
}

class Human extends Animal{
	public static $leg = 2;

	public static function cry(){
		echo '哇哇~<br />';
	}

	public static function eat(){
		echo '用火烧了吃~<br />';
	}
}

class Student extends Human{
	const age = 16;

	public static function cry(){
		echo '嘤嘤<br />';
	}

	public static function eat(){
		echo 'BBQ~';
	}
}


//test animal class
/*
$animal = new Animal();
$animal->cry(); 
$animal->t1();

echo '<hr/>';
$animal->t2();
*/
//test Human

$stu = new Student();
$stu::t1();
echo '<hr/>';
$stu::t2();

/*
总结：extends继承父类后，如果是用self调用重写的方法调用的是父类的，使用static调用的是自身的
*/


echo '<h3>Program runing is ok!</h3>';
?>

