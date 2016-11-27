<?php
header('Content-Type:text/html; charset=utf-8');
/*
__call 在thinkPHP中的应用
下面的例子动态创建方法
*/
class Action{
	public function bj(){
		echo '北京天气预报<br />';
	}

	public function __call($method, $args){
		echo $method,'天气预报<br />';
	}
}

$action = new Action();
$method = $_GET['method'];

if($method){
	$action->$method();
}

echo 'ok!<br />';
?>