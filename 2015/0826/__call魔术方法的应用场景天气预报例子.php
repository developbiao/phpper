<?php
/*
__call的应用练习 
call 动态创建方法 
*/
header('Content-Type:text/html; charset=utf-8');
class Action{
	public function bg(){
		echo '天气预报<br />';
	}

	public function __call($method, $args){
		echo $method, '天气预报<br />';

	}

	public function speakNews(){
		echo '今天的新闻是BBC报的，一大批外星人正在登陆地球!<br />';
	}

}

$action = new Action();
$method = $_GET['method'] ? $_GET['method'] : 'ChengDu';

if($method){
	$action->$method();
}


$action->speakNews();

//$action->news163(); //调用一个不存在的方法会调用到__call方法 


echo '<h3>Program runing is ok!</h3>';

?>
