<?php
/*
@Describe:Session的读取
@Author:GongBiao
@Date:2015/07/03
*/
header('Content-Type:text/html; charset=utf-8');

session_start();


//__PHP_Incomplete_Class Object 注意session里面有对象需要先声明类哦
class Dog{
	public $leg = 4;	
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

echo '<h3>读取完成</h3>';

?>