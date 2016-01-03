<?php
header('Content-Type:text/html;charset=utf-8');
/*
函数注意事项
1、函数不能重复声明
*/

function t(){
	echo 't';
}

//使用这个函数
t();

//再定义一个
/*
function t(){
	echo 'hha';	
}
Fatal error: Cannot redeclare t()
*/

/*
function time(){
//系统函数不能定义，但可以包在类范围内的函数和全局函数不是一回事
因些可以重名
}
*/

class clock{
	public function time(){
		//echo '现在时间戳是:',time(); //些处调用的是系统的time()函数
		echo $this->t();   //内部要使用自身的需要写this
	}

	public function t(){ //自己的t
		echo '内部的time';

	}
}


echo '<br />';

$t = new clock();
$t->time();  //类内的方式可以和外部的方法第一名，关键是有一个类包着




?>
