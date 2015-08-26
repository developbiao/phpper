<?php
/*
auto_load自动加载测试
*/
header('Content-Type:text/html; charset=utf-8');
define('ACC', 'Deny'); //define定义的全局都可以访问
define('PI', 3.1415926);

class Action{

	const NEWS = '163news';

	public function __construct(){
		echo ACC,'<br />';
		echo PI,'<br />';
		echo self::NEWS,'<br />';
	}

}

$action = new Action();

/*
总结:
const 常量权限是public 在类中使用
define 定义的全局有效
*/

echo '<h3>Program runing is ok!</h3>';

?>
