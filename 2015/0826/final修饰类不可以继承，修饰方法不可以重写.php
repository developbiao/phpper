<?php
/*
final 修改类，则些类不能够被继承
final 修改方法则此方法 不能被修改
*/
header('Content-Type:text/html; charset=utf-8');

/*
final class People{

}

class Dog extends People{
	//狗类不能继承人类
}
*/


class Human{
	final public function say(){
		echo '我们是华夏子孙!<br />';
	}

	public function show(){
		echo '哈哈~我大中华!';
	}
}

class Stu extends Human{
	public function Say(){
		echo '我要出国，做美利坚人!';	
	}
}

echo '<h3>final 修饰的方法可以继承但不可以重写</h3>';

$nine = new Stu();
$nine->Say(); //Fatal error: Cannot override final method Human::Say() in /mnt/hgfs/workspace/phpper/0826/index.php on line 33
$nine->show();


?>
