<?php
header('Content-Type:text/html; charset=utf-8');
/*
PHP中的多态
*/

class Light { //一把手电筒
	public function TrunOn($obj){
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
	public function dislay(){
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

//打开红灯
$light = new Light();
$redglass = new RedGlass();
$light->TrunOn($redglass);


//打开绿灯
$greenglass = new GreenGlass();
$light->TrunOn($greenglass);


//坏了猪八戒从手电筒里面出生了

$pig = new Pig();
$light->TrunOn($pig);
/*****
分析 与java那段出错程序相比
php没报错,
因为PHP是弱类型动态语言.

一个变量  
$var = 8;
$var = 'hello';
$var = new Pig();

一个变量,没有类型,你装什么变量都行.

同理,传参,参数也没有强制类型.
传什么参都行.


所以,对于PHP动态语言来说,岂止是多态,简直是变态.



// 又有专家说, 你这个太灵活了,简直变态,不能这么灵活.
 否则我们就不说你多态.

答:别急,我们不让php这么灵活还不行吗
我对参数做类型限制总行了吧.
见下一页
*****/



?>
