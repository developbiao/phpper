<?php
header("Content-Type:text/html; charset=utf-8");
/*
常量
普通常量 define('常量名'， 常量值);
define定义的常量，全局有效
无论是页面内，函数内，类内，都可以访问

专门在类里面发挥作用说明
1：作用域在类内，类似于静态属性
2：又是常量，则不可改

其实就是"不可改变的静态属性"


常量：在类内用使用const声名即可
前面不用加修饰
而且权限是public的，即外部也可以访问



*/

define('ACC', 'Deny');
define('NEWS', 'Cnet');

class Human{
	const HEAD = 1;

	public static $leg = 2;

	public static function show(){
		echo ACC,'<br />';
		echo self::HEAD,'<br />';
		echo self::$leg,'<br />';
	}
}

Human::show();
echo Human::HEAD; //访问常量HEAD
echo NEWS;

?>

