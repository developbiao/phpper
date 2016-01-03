<?php
/*
1)、析构函数是在对象销毁的时候，自动执行
2）、PHP是脚本语言，在代码执行到最后一行时，所申请的内存也被释放掉，
自然，对象的那段内存也要释放，对象就被销毁了对于PHP所做的web程序，想犯内存泄露的错误也很难。

*/
header('Content-Type:text/html;charset=utf-8');

class Human{

	//构造函数
	public function __construct(){

		echo '出生了!<br />';

	}

	//析构函数
	public function __destruct(){
		echo '终究没能逆袭!<br />';
	}
}



$p1 = new Human();
$p2 = new Human();
$p3 = new Human();
$p4 = new Human();

unset($a);
$b = false;
$c = NULL;


//死三次


echo '<hr />';




?>
