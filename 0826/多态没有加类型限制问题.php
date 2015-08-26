<?php
/*
php中的多态practice
*/
header('Content-Type:text/html; charset=utf-8');

class Light{ //一个幻灯机
	public function TrunOn($obj){ 
		$obj->display();
	}	
}

class RedClass{
	public function display(){
		echo '红灯照耀<br />';
	}
}


class GreenClass{
	public function display(){
		echo '绿灯照耀<br />';
	}
}

class BlueClass{
	public function display(){
		echo '蓝灯照耀<br />';
	}
}

class Pig{
	public function display(){
		echo '猪八戒下凡，哼哼坠地<br />';
	}
}


$light = new Light();
$redClass = new RedClass();
$light->TrunOn($redClass);

//没有加类型限制
$light->TrunOn(new Pig()); //


echo '<h3>Program runing is ok!</h3>';

?>
