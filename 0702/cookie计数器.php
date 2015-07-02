<?php
/*
@Describe:Cookie的实例访问页面计数器
@Author:GongBiao
@Date:2015/07/02
*/
header('Content-Type:text/html; charset=utf-8');

//用cookie来记录本网站已访问了多少页面

if(!isset($_COOKIE['num'])){ //第一次来访问，还没有cookie
	$num = 1;
	setcookie('num', $num);
}else{
	setcookie('num', $num + 1);
}

echo '<h3>这是你第'.$num.'次访问页面</h3>';


?>
