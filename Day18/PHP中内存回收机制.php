<?php
/*
PHP中内存回收机制
*/
header('Content-Type:text/html;charset=utf-8');

class Human{


	public function __destruct(){
		echo '死求！<br />';
	}

	public $name = 'nobody';

}



$a = new Human();
$d = $c = $b = $a;
//对象默认是引用传值的,指向的是同一个对象

echo $a->name,'<br />'; //nobody
echo $b->name,'<br />'; //nobody

$b->name = '椰子';  //修改了Object中的值

echo $a->name,'<br />'; //'椰子'
echo $b->name,'<br />'; //'椰子'

unset($a); //$d,$c,$d在指向的对象，因些对象不能销毁

echo '<hr />';  

/*
1、死了1次 ,在hr下，在PHP页面执行到最后执行回收到内存
*/






?>
