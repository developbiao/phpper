<?php
header("Content-Type:text/html; charset=utf-8");
/*
接口 
因为接口的方法 本身就是抽象,不要有方法体,也不必加abstrac
类如果是一种事物/动物的抽象
那么 接口,则是事物/动物的功能的抽象,
即,再把他们的功能各拆成小块
自由组合成新的特
*/

//写了4个接口
interface animal{
	public function eat();
}

interface monkey{
	public function run();
	public function cry();
}

interface wisdom{
	public function think();
}

interface bird{
	public function fly();
}


//实现了三个接口
class Human implements animal, monkey, wisdom{ 

	public function eat(){
		echo '吃';
	}	

	public function run(){
		echo '走';
	}

	public function cry(){
		echo '哭';
	}

	public function think(){
		echo '思考';
	}
}

$lijun = new Human();
$lijun->eat(); //吃
$lijun->think(); //思考 

echo '<hr />';

/*
根据接口，造一个天使
*/

class Angle implements animal,monkey,wisdom,bird{
	public function eat(){
		echo '吃';
	}	

	public function run(){
		echo '走';
	}

	public function cry(){
		echo '哭';
	}

	public function think(){
		echo '思考';
	}

	public function fly(){
		echo '张开翅膀保护你!<br />';
	}
}


$angle1 = new Angle();
$angle1->fly();




?>
