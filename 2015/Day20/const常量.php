<?php
/*

*/
header('Content-Type:text/html; charset=utf-8');
class A{
	const c = "ConstA";

	public function m(){
		echo self::c;
	}
}


class B extends A{
	const c="constB";
}

$b = new B();
$b->m(); //输出ConstA
?>
