<?php
header('Content-Type:text/html; charset=utf-8');
/*
PHP中的多态
*/

class Light { //一把手电筒
	//些处，仿java,也加一个类名，做参数类型检测
	public function TrunOn(Glass $obj){   //类型限制只能使用BlueGlass
		$obj->display();

	}
}


//创建一个Glass父类，做为Glass类型限制
class Glass{ 


	//一个空的方法
	public function display(){

	}


}


//滤镜
class RedGlass extends Glass{
	public function display(){
		echo '红光照耀<br />';
	}
}

class BlueGlass extends Glass{
	public function display(){
		echo '蓝光照耀<br />';
	}

 }

class GreenGlass extends Glass{
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
$greenglass = new GreenGlass();
$light->TrunOn($greenglass);

//坏了猪八戒从手电筒里面出生了, 现在做了类型限制

$pig = new Pig(); 
$light->TrunOn($pig);  //Catchable fatal error: Argument 1 passed to Light::TrunOn() must be an instance of BlueGlass



?>