<?php
/*
复习操作飞机的例子
*/
header('Content-Type:text/html; charset=utf-8');

//制作飞机的想法
abstract class FlyIdea{
	//engine
	public abstract function engine();

	//blance 平衡舵
	public abstract function blance(); 
}


abstract class Rocket extends FlyIdea{
	public function engine(){
		echo '点燃火药, 失去平衡,Bom!<br />';
	}

}


//到在21世纪

class Fly extends Rocket{
	public function engine(){
		echo '发动机起动中!<br />';
	}

	public function blance(){
		echo '保持平衡!<br />';
	}


	public function start(){
		$this->engine();
		for($i=0; $i<10; $i++){
			sleep(1);
			$this->blance();
			echo '起飞中...<br />';
		}

		echo '<h3>平衡飞行中....</h3>';
	}
}



$aircarft = new Fly();
$aircarft->start();


echo '<h3>Program runing is ok!</h3>';

?>
