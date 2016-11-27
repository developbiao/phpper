<?php
/*
@Describe:StudentModel
@Author:GongBiao
@Date:2015/07/16
*/
class StudentModel extends Model{
	//字段映射
	protected $_map = array(
		'user' => 'username',
		'passwd' => 'password'
		);

	//自动完成
	protected $_auto = array(
		array('password', 'md5', '3', 'function'),
		array('regtime', 'time', '3', 'function')
		);

	//自动验证
	protected $_validate = array(
		array('username', 'require', '用户名不能为空!'),
		array('password', 'require', '密码不能为空！'),
		array('password', 'checkPasswd', '密码长度至少6位', 2, 'callback'),
		array('repassword', 'password', '两次密码不一致!', 2, 'confirm'),
		array('vcode', 'require', '验证码不能为空!'),
		array('vcode', 'checkcode', '验证码有误', 2, 'callback'),
		array('email', 'email', '邮箱地址有误！'),
		array('num', 'number', '只能是数字')
		);
	protected $patchValidate = true;


	//验证码检查

	protected function checkcode($vcode){
		exit;
		if($vcode != $_SESSION['scode']){
			return false;
		}
	}


	//检查密码长度 

	protected function checkPasswd($password){
		if(strlen($password) < 6){
			return false;
		}
	}

}
?>