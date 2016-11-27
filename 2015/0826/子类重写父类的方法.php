<?php
header('Content-Type:text/html; charset=utf-8');
class A{
	const c= 'ConstA';
	public function m(){
		echo self::c;
	}

	public function show(){
		echo 'parent A function<br />';
	}
}

class B extends A{
	const c = 'ConstB'; //如果Const c没有调用的就是父类的const c

	//重写了父类的shop方法
	public function show(){
		//parent::show();
		echo '年轻你就应该去看海<br />';
	}
}

$b = new B();

$b->m();
echo '<br />';
$b->show();

?>
