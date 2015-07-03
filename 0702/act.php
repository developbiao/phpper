<?php
header('Content-Type:text/html; charset=utf-8');

//如何客户端修改的cookie就有问题了
if($_COOKIE['user'] == 'vip'){
	echo '<h3>尊敬的大客户您好！</h3>';
}else{
	echo '<h3>你是普通用户，爱买不买!</h3>';
}
?>