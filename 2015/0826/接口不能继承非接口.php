<?php
header('Content-Type:text/html; charset=utf-8');
interface A{
	public function t1();
}

interface B{
	public function t2();
}


class C implements A, B{
	public function t1(){
		echo 't1..';	
	}
	public function t2(){
		echo 't2..';	
	}

}

interface People extends C{
	public function fly();

}

class Action implements People{
	public function fly(){
		echo '到好个时候人也会飞呼!';
	}
}

$action = new Action();
$action->fly();

echo '<h3>Program runing is ok!</h3>';

?>
