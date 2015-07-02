<?php
/*
@Describe:注册Contorl处理
@Author:GongBiao
@Date:2015/07/01
*/
/*
regAct.php
作用：接收用户注册的表单信息，完成注册
*/


define('ACC', true);
require('./include/init.php');
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

$user = new UserModel();

/*
调用自动检验功能
检验用户名4-16个字符之内
email 检查
passwd 不能为空
*/

//自动检验
if(!$user -> _validate($_POST)){
	$msg = implode('<br />', $user->getErr());
	include(ROOT . 'view/front/msg.html');
	exit;
}

//检查用户是否存在

if($user->checkUser($_POST['username'])){
	$msg = '用户名已存在';
	include(ROOT. 'view/front/msg.html');
	exit;
}

$data = $user->_autoFill($_POST); //自动填充
$data = $user->_facade($data); //自动过滤
/*
echo '<pre>';
print_r($data);
echo '</pre>';
*/

if($user->reg($data)){
	$msg = '用户注册成功';	
	include(ROOT. 'view/front/msg.html');
}else{
	$msg = '用户注册失败';	
	include(ROOT. 'view/front/msg.html');
}



?>