<?php
/*
*@Decribe:php匿名函数练习
*@Author:GongBiao
*@Date:2015/09/06
*/

//从父作用域继承变量
$message = 'hello';

//没有 use
/*
$example = function (){
	var_dump($message); //Notice: Undefined variable: message in E:\Code\phpper\0906\index.php on line 13
NULL 
};

echo $example();
*/

//继承$message
$example = function () use($message){
	var_dump($message);
};

echo $example(); //string(5) "hello" 

// is defined, not when called
$message = 'world';
echo $example();

//Reset message
$message = 'hello';

//Inherit by-reference 引用
$example = function () use(&$message){
	var_dump($message);
};

echo $example(); //hello

$message = 'world'; //world
echo $example();

//闭包可接受常规参数
$example = function ($arg) use($message){
	var_dump($arg. '---'. $message);
};

$example('GongBiao'); // string(16) "GongBiao---world" 



?>
