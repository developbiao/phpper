<?php
/*
魔术方法praictice
魔术方法是指某些怀况下，会自动调用的方法，称为魔术方法
PHP面向对象中，提代了这几个魔术方法 
他们的特点，都是以双下划下__开头
*/
header('Content-Type:text/html; charset=utf-8');

class Human{
	public $age = 17;
	public function __clone(){ //当clone的时候自动调用 使用protected修饰就不能调用了

		echo '最新MP3－－请使用正版!<br />';
	}

}
	$huang = new Human();
	$catory = clone($huang);



echo '<h3>Program runing is ok!</h3>';

?>
