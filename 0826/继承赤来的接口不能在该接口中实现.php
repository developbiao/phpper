<?php
header('Content-Type:text/html; charset=utf-8');
interface A{
	public function t1();
}

interface B{
	public function t2();
}


interface C extends A, B{
	/*
	public function t1(){
		echo 't1..';	
	}
	public function t2(){
		echo 't2..';	
	}
	*/

}

interface People extends C{
	public function fly();
	/*
	接口里面不能实现继承过来的接口
	Fatal error: Interface function People::t1() cannot contain body in /mnt/hgfs/workspace/phpper/0826/index.php on line 28
	public function t1(){
		echo 't1..';	
	}
	public function t2(){
		echo 't2..';	
	}
	*/

}

class Action implements People{
	public function fly(){
		echo '到好个时候人也会飞呼!';
	}

}

$action = new Action();
$action->fly();

echo '<h3>Program runing is ok!</h3>';
/*
总结：
接口能继承，但不把继承过来的接口在里面实现，只能由下个人来实现
*/

?>

