<?php
/*
抽象的abstract的应用
*/
header('Content-Type:text/html; charset=utf-8');

//定义一个抽象类
abstract class Welcome{
	public abstract function wel();
	public function location(){
		echo 'index...';
	}
}

//中国小组开发自己的welcome类

class China extends Welcome{
	public function wel(){
		echo '你好，非死不呵呵!<br />';
	}
}

//美国小组开发自己的welcome类

class English extends Welcome{
	public function wel(){
		echo 'Hello, Welcome FaceBook!<br />';
	}
}


//日本小组开发自己的welcome类
class Jpan extends Welcome{

	public function wel(){
		echo 'so Ga Huan gu bagaga。。。';
	}
}


$language = 'english';
$wel = new $language();
$wel->wel();





echo '<h3>Program runing is ok!</h3>';

?>
