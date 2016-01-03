<?php
/*
自定义自动加载函数
注意：我们自己定义要自己加载的函数，要通知系统，
让系统知道--我们自己不定期了一个自动加载方法，用这个
怎么通知：用系统函数:spl_auto_register
*/
header("Content-Type:text/html; charset=utf-8");


//下面这这笱话，是把__Exautoload函数注册成为“自动加载函数”
spl_autoload_register('__Exautoload');

function  __Exautoload($c){
	echo '我引入了./'.$c.'php文件<br />';
	require('./'.$c.'.php');

}

$pig = new PigModel(); //引入的类
$pig->shout(); 



?>
