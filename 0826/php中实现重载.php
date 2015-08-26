<?php
/*
php中模拟Java中的函数重载
*/
header('Content-Type:text/html; charset=utf-8');

class Calc{
	public function area(){
		//判断一个调用area函数，通过func_get_args()方法获取参数数组
		$args = func_get_args();
		if(count($args) == 1){
			return 3.14 * $args[0];
		}else if(count($args) == 2){
			return $args[0] * $args[1];
		}else{
			return '未知图形<br />';
		}
	}
}


$calc = new Calc();
echo '<h3>调用两个参数</h3>';
echo $calc->area(17, 188);

echo '<h3>调用三个参数</h3>';
echo $calc->area('17', 188, 99);

echo '<h3>Program runing is ok!</h3>';

?>
