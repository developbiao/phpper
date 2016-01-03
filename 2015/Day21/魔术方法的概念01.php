<?php
header('Content-Type:text/html; charset=utf-8');

class Human{
	public $age = 22;
	protected function __clone(){ //__clone()魔术方法有人clone的时机调用
		echo '有人克隆我！打击盗版!<br />';
	}
}

$biaoge = new Human();
$aliax = clone $biaoge; 
/*
魔术方法:
是指某些情况下,会自动调用的方法,称为魔术方法
PHP面向对象中,提供了这几个魔术方法,
他们的特点 都是以双下划线__开头
__clone 使用了protected就无法clone了
*/
?>
