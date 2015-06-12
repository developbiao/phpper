<?php
header("Content-Type:text/html; charset=utf-8");

/*
魔术常量
1:无法手动修改的值，所以中常量
2：但是值又是随环境变动的，所以叫魔术
*/


echo '当前在运行的是', __FILE__,'文件<br />';
echo '当前运行在第',__LINE__,'行Code<br />';
echo '当前的目录是',__DIR__,'<br />'; //5.3中才有


class Test{
	public function show(){
		echo '当前的类是',__CLASS__,'<br />';
		echo '当前的方法是',__FUNCTION__,'<br />';
	}
}

Test::show();
?>
