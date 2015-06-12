<?php
header("Content-Type:text/html; charset=utf-8");

//写了4个接口
interface animal{
	public function eat();
}

//接口也可以继承
interface monkey extends animal{  
	public function run();
	public function cry();
}

interface wisdom{
	public function think();
}

interface bird extends animal{
	public function fly();
}


//

class Human implements monkey,wisdom{
		public function eat(){ //这个eat方法是moneky 继承于animal 所以 也要实现
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

class Angle implements bird{

	public function eat(){
		echo '吃空气';
	}
	public function fly(){
		echo '张开翅膀保护你!<br />';
	}
}


$angle1 = new Angle();
$angle1->eat(); //吃
$angle1->fly(); //飞


interface People extends monkey{
	public function UsePhone(); //使用手机

}


//新的人类出现了

class Extraterrestrial implements People{
	public function UsePhone(){
		echo '玩微信!<br />';
	}


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

$exp = new Extraterrestrial(); //现代人
$exp->think();
$exp->UsePhone();







/*
总结：
接口可以继承接口
接口可以多实现
定义接口:interface
实现：implements

*/



?>
