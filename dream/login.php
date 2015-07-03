<?php
header('Content-Type:text/html; charset=utf-8');
/*
@Describe:用户登陆页面
@Author:GongBiao
@Date:2015/07/03
*/
define('ACC', true);
require('./include/init.php');

if(isset($_POST['act'])){
	//这里说明是点击按钮过来的
	//收用户名/密码，验证

	$name = $_POST['username'];
	$passwd = $_POST['passwd'];

	/*
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	exit;
	*/

	//合法性检测...

	$user = new UserModel();

	//核对用户名，密码
	$row = $user->checkUser($name, $passwd);

	if(empty($row)){
		$msg = '用户名密码不匹配!';
	}else{
		$msg = '登陆成功!';	
		session_start();
		$_SESSION = $row; //登陆成功设置session

		//记住用户名
		//remember
		if(isset($_POST['remember'])){
			setcookie('remuser', $name, time() + 14 * 24 * 3600); //保存2周
		}else{
			setcookie('remuser', '', 0);
		}
	}

	include('./view/front/msg.html');
}else{
	//判断是否记住用户名
	$remuser = isset($_COOKIE['remuser'])?$_COOKIE['remuser']:'';
	//准备登陆
	include('./view/front/denglu.html');
}
?>