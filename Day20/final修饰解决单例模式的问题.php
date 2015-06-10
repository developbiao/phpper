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


}
?>

