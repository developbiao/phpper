<?php
header('Content-Type:text/html; charset=utf-8');
/*
接口
接口类class都不用写，换写成interface本身是抽象的，不要有方法体，边abstract都不用加
类如果是一种事物、动物功能的抽象
即，再把他们的功能各拆成小块
*/

//写4个接口

interface animal{
	public function eat();
}

interface monkey extends animal{ //接口可以继承
	public function walk();
	public function cry(); 	
}

interface wisdom{
	public function think();
}

interface bird{
	public function fly();
}


//实现了三个接口,接口可以多实现

class Human implements monkey, wisdom{
	public function eat(){ //monkey继承于animal所有要实现aanimal里面的方法
		echo '吃的是米饭<br />';
	}

	public function walk(){
		echo '到处走<br />';
	}

	public function cry(){
		echo '哭<br />';
	}

	public function think(){
		echo '会思考';
	}


}



$lilei = new Human();
$lilei->eat();
$lilei->walk();
$lilei->cry();
$lilei->think();

echo '<hr />';

class Angle implements animal, monkey, wisdom, bird{
	public function eat(){
		echo '吃的仙气<br />';
	}

	public function walk(){
		echo '到处走<br />';
	}

	public function cry(){
		echo '哭<br />';
	}

	public function think(){
		echo '会思考';
	}

	public function fly(){
		echo '张开翅膀飞翔!<br />';
	}
}

$angle = new Angle();
$angle->fly();

interface People extends monkey{
	public function usePhone();
}


//新从类出现了会玩微信
class Hotperson implements People{

	public function usePhone(){
		echo '<h3>新人类会玩微信!</h3>';
	}


	public function eat(){ //monkey继承于animal所有要实现aanimal里面的方法
		echo '吃的是米饭<br />';
	}

	public function walk(){
		echo '到处走<br />';
	}

	public function cry(){
		echo '哭<br />';
	}

}

echo '<hr />';
$hotp = new Hotperson();
$hotp->usePhone();



echo '<h3>Program runing is ok!</h3>';

?>
