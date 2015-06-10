<?php
header('Content-Type:text/html; charset=utf-8');
/*
PHP中的多态
*/

class Light { //一把手电筒
	public function TrunOn(BlueGlass $obj){   //类型限制只能使用BlueGlass
		$obj->display();

	}
}


//滤镜
class RedGlass{
	public function display(){
		echo '红光照耀<br />';
	}
}

class BlueGlass{
	public function display(){
		echo '蓝光照耀<br />';
	}

}

class GreenGlass{
	public function display(){
		echo '绿光照耀<br />';
	}

}


//猪八戒类

class Pig{
	public function display(){
		echo '猪八戒下凡，哼哼坠地! <br/>';
	}
}

//main

//打开蓝灯
$light = new Light();
$blueglass = new BlueGlass();
$light->TrunOn($blueglass);


//打开绿灯
/*
$greenglass = new GreenGlass();
$light->TrunOn($greenglass);
*/

//坏了猪八戒从手电筒里面出生了, 现在做了类型限制

$pig = new Pig(); 
$light->TrunOn($pig);  //Catchable fatal error: Argument 1 passed to Light::TrunOn() must be an instance of BlueGlass

/*

加了类型检测后,果然Pig传不行.

解决:参数定为父类,传其子类.

哲学: 子类是父类, 例:男人是人,白马是马,蓝玻璃是玻璃.

里氏代换: 原能用父类的场合,都可以用子类来代替.

*/



?>
