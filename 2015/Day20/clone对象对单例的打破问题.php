<?php
/*
单例模式例子
*/
header('Content-Type:text/html; charset=utf-8');
class Singleton{
	public $hash; //随机码
	static protected $ins = NULL; //用来存储对象

	//使用final把函数声明为最终的
	final protected function __construct(){  //保护起来不能new
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


$t1 = Singleton::getInstance();
$t2 = Singleton::getInstance();


$t3 = clone $t2; //clone一个新的对象,不是同一对象



print_r($t1);
print_r($t2);

if($t1 === $t2){
	echo '是同一对象<br />';
}else{
	echo '不是同不对象<br />';
}

echo 'Clone的对象';
if($t2 === $t3){
	echo '是同一对象<br />';
}else{
	echo '不是同不对象<br />';
}





?>

