<?php
/*
__call调用一个不存在的函数并做出处理 
*/
header('Content-Type:text/html; charset=utf-8');


class Action {

	public  function __call($method, $args){

		echo '你想调用-->', $method, '方法，传给我的参数是--><br />';
		echo '<pre>';
		print_r($args);
		echo '</pre>';

	}

	public function shout(){
		echo '<h3>小狗汪汪叫!</h3>';
	}

}



$action = new Action();
$action->pop('小鲸', '小鸭');


echo '<h3>Program runing is ok!</h3>';

?>
