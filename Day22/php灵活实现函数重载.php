<?php
header("Content-Type:text/html; charset=utf-8");
/*

*/


class Human{
	public function say($name){
		echo $name, '吃了吗？<br />';
	}
}

class Stu extends Human{
	public function say(){
		echo 'Yo Yo 切克闹!<br />'; //上面这个过程叫重写override
	}
}



$ming = new Stu();
$ming->say();
$ming->say('张三');


/*
可以灵活的模拟像Java中的函数重载的效果
*/

class Calc{
	public function area(){
		//判断一个调用area时，得到的参数个数
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


//计算面积
$cal = new Calc();
echo $cal->area();
echo '<br/>';
echo $cal->area(8.88);
echo '<br/>';
echo $cal->area(77, 88);

?>
