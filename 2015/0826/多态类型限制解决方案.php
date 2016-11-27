<?php
/*
php中的多态practice
*/
header('Content-Type:text/html; charset=utf-8');

class Light{ //一个幻灯机
	public function TrunOn(Glass $obj){ //类型限制只能使用Glass, 参数定义为父类，传其子类
		$obj->display();
	}	
}


//定义一个Glass父类
class Glass{
	public function display(){

	}
}

class RedClass extends Glass{
	public function display(){
		echo '红灯照耀<br />';
	}
}


class GreenClass extends Glass{
	public function display(){
		echo '绿灯照耀<br />';
	}
}

class BlueClass extends Glass{
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
$light->TrunOn(new RedClass()); //打开红灯
$light->TrunOn(new BlueClass()); //打绿类

//没有加类型限制
$light->TrunOn(new Pig()); //


/*
加了类型检测后,果然Pig传不行.
解决:参数定为父类,传其子类.
哲学: 子类是父类, 例:男人是人,白马是马,蓝玻璃是玻璃.
里氏代换: 原能用父类的场合,都可以用子类来代替.
*/



echo '<h3>Program runing is ok!</h3>';

?>
