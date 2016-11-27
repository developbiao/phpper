<?php
header('Content-Type:text/html; charset=utf-8');
/*
PHP类属性定义和访问方式

   1、 在实例化对象时  $test1 = new testClass(); 其中testClass()中的()可以省略，当构造函数有显式声明需要参数时，需要在这里传入参数
   2、如果被引用的变量或者方法被声明成const（定义常量）或者static（声明静态）,那么就必须使用操作符::
   3、 如果被引用的变量或者方法没有被声明成const或者static,那么就必须使用操作符->
   4、 从类的内部访问const或者static变量或者方法,使用自引用的self
   5、从类的内部访问不为const或者static变量或者方法,使用自引用的$this

*/

class TestClass{
	const tConst = 1; //常量 
	public $tVar = 2;
	static $tSta = 3;

	public function __construct(){
		echo $this->tConst;  //无错误，无输出
		echo self::tConst;  //正确输出1

		echo $this->tVar; //注意tVar前不能加$,输出2
		//echo self::tVar;  //tVar 前需要加$符号,Undefind class constant 'tVar'
		//echo self::$tVar; //Fatal error: Access to undeclared static property: TestClass::$tVar i

		echo $this->tSta; //无错误，无输出
		echo self::$tSta;  //正确输出3


	}
}

$test1 = new TestClass;


?>
