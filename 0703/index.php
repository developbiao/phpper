<?php
/*
@Describe:session
@Author:GongBiao
@Date:2015/07/03
*/
header('Content-Type:text/html; charset=utf-8');


/*
session的详细语法学习
session的创建，修改、销毁

1:无论是创建、修改、销毁都需要开启session_start();
2:一旦session_start后，$_SESSION就可以自由的添加、删除、修改

*/


session_start();  //开启session

//session是可以存储类型很多,很灵活

$_SESSION['user'] = 'Biaogege';
$_SESSION['hobby'] = 'Dance';
$_SESSION['data'] = array('我', '是', '数', '组'); //session可以放数组

class Dog{
	public $leg = 4;
}

$dog = new Dog();
$_SESSION['dog'] = $dog;   //session可以放对象

echo '<h3>Session设置程序运行完成</h3>';





?>