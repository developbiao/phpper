<?php
header("Content-Type:text/html; charset=utf-8");
/*
抽象类的意义
操作多国语言首页
*/

/*

版本1：传统使用面向过程
$country = 'jpan';

if($country == 'china'){
	echo '你好，非死不可!<br />';
}else if($country == 'jpan'){
	echo 'So Ga facebook!<br />';

}else if($country == 'english'){
	echo 'Hello Facebook!<br />';	
}

*/


//版本二使用OOP

//反思：当facebook进行泰国市场时，增加else if, 扩展性差

/*
让美国小组/中国小组/...自己做自己的语言Welcome类
*/


//定义一个抽象类
abstract class Welcome{
	public abstract function wel();
	public function location(){
		echo 'index';
	}
}


//中国小组继承实现Welcome类
class china  extends Welcome{
	public function wel(){
		echo '你好，非死不可!<br />';
	}
}


//日本小组开发自己的语言 

class jpan extends Welcome{
	public function wel(){
		echo 'Sogaga Facebook!<br />';
	}
}

//美国小组
class english extends Welcome{
	public function wel(){
		echo 'Hi,FaceBook!<br />';
	}
}


$language = 'jpan';

$wel = new $language();
$wel->wel();



?>


