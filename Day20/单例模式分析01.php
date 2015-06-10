<?php
header('Content-Type:text/html; charset=utf-8');
/*
//外部不能new，但引出一个问题，不能new,那得不到对象，这不是单例
class Single{
	protected function __construct(){  //保护起来构造函数

	}
}

$s1 = new Single(); //不允许new
*/

/*

第三步判断hash值来判断是不是同一个对象

class Singleton{
	public $hash; //随机码

	protected function __construct(){
		$this->hash = mt_rand(1, 99999);
	}


	static public function getInstance(){
		return new self(); //new 自己
	}

}


$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();


print_r($s1);  //打印hash
print_r($s2);

//判断是不是同一对象
if($s1 === $s2){
	echo '是一个对象<br />';
}else{
	echo '不是一个对象<br />';
}

*/


/*
版本4:
通过内部的static方法实例化,
并且,把实例保存在类内部的静态属性

class Singleton{
	public $hash; //随机码
	static protected $ins = NULL; //用来存储对象

	protected function __construct(){  //保护起来不能new
		$this->hash = mt_rand(1,99999);
	}


	static public function getInstance(){
		if(self::$ins instanceof self) {//indtalce of专门用来判断是不是同一个实例
			return self::$ins;
		}

		self::$ins = new self(); 
		return self::$ins;
	}
}


//$s1 = new Singleton();
//$s2 = new Singleton();
$s1 = Singleton::getInstance();
$s2 = $s1;

print_r($s1);
print_r($s2);

if($s1 === $s2){
	echo '是同一对象<br />';
}else{
	echo '不是同不对象<br />';
}
*/

//看出的问题一继承就出问题了
class Singleton{
	public $hash; //随机码
	static protected $ins = NULL; //用来存储对象

	protected function __construct(){  //保护起来不能new
		$this->hash = mt_rand(1,99999);
	}


	static public function getInstance(){
		if(self::$ins instanceof self) {//indtalce of专门用来判断是不是同一个实例
			return self::$ins;
		}

		self::$ins = new self(); 
		return self::$ins;
	}
}


class Test extends Singleton{
	public function __construct(){
		parent::__construct();
	}

}


$s1 = new Test();
$s2 = new Test();

print_r($s1);
print_r($s2);

if($s1 === $s2){
	echo '是同一对象<br />';
}else{
	echo '不是同不对象<br />';
}


?>


