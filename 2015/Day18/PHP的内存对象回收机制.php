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


$p3 = $p2 = $p1 = new Human();

unset($p3);
echo 'unset p3<br />';


unset($p2);
echo 'unset p2<br />';


unset($p1);
echo 'unset p1<br />';   //Object对象没有人使用了就死的这里


echo '<hr />';



?>
