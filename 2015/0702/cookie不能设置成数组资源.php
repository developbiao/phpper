<?php
/*
@Describe:Cookie
@Author:GongBiao
@Date:2015/07/02
*/
header('Content-Type:text/html; charset=utf-8');

/*
把uri放在cookie里
setcookie('history', array($uri));
这是错误写法，因为cookie只能存储字符串，数字，不能是数组，对象，资源
因此$uri要放在数组里面，但数组需要转成字符串
*/


//$data = array('name'=>'biaoge', 'age'=>17);
$data = '我是字符串哦';

setcookie('data', $data);

echo '<h3>Cookie设置完成</h3>';



?>
