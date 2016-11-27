<?php
header("Content-Type:text/html; charset=utf-8");

//制作飞机例子
abstract class FlyIdea{
	//engine
	public abstract function engine();

	//blance 平衡舵
	public abstract function blance();

}

abstract class Rocket extends FlyIdea{
	public function engine(){
		echo '点然火药，失去平衡，嘭';
	}

	//但是万户实现不了平衡舵
	//因此平衡舵对于Rocket类来说还是抽象的
	//类也是抽象的
}

//现代有了平衡器
class Fly extends Rocket{

	public function engine(){
		echo '发动机起动中!<br />';
	}

	public function blance(){
		echo '两个机翼找开保持平衡<br />';
	}


	public function start(){
		$this->engine();
		for($i=0; $i<10; $i++){
			$this->blance();
			echo '起行中....<br />';
		}

		echo '平衡飞行中!<br />';
	}

}


$aircarft = new Fly();
$aircarft->start(); //起飞

/*
总结：
类前加abstract 是抽象类
方法前加abstract是抽象方法

抽象类不能实例化
抽象方法不能有实体

有抽象方法，则些类必是 抽象类

介是----既便全是具休方法，但是抽象的也不能实例化

*/


?>
