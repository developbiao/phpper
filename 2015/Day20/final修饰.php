<?php
/*
final 修饰类，则此类不能够被继承
final 修改方法 则些方法不能被重写

在java中，final也可以修改属性，些时属性值，就是一个常量，不可修改
问：php的类中，可不可以有常量有const
*/
header('Content-Type:text/html; charset=utf-8');

/*
final修饰类
final class People{

}

class Dog extends People{
//不能被继承	Fatal error: Class Dog may not inherit from final class (People)
} 
*/


class Human{
	final public function Say(){
		echo '我们是华夏子孙!<br />';
	}

	public function show(){
		echo '哈哈<br />';
	}
}


class Stu extends Human{

}

class FreshMan extends Stu{
	public function Say(){
		echo '我要出国，做美得坚人!<br/>';
	}
}

echo 'final修饰的方法可以继承<br />';

$ming = new Stu();
$ming->Say();
$ming->show();


echo '但不可以修改<br />';

$fr = new FreshMan();
$fr->Say();
$fr->show();
/*
Fatal error: Cannot override final method Human::Say()
*/
?>

