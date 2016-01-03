<?php
/*
@Describe:UserModel用户注册Model
@Author:GongBiao
@Date:2015/07/18
*/

class UserModel extends RelationModel{
	//自动验证规则
	protected $_validate = array(
		array('username', 'require', '用户名不能为空'),
		array('fcode', 'require', '验证码不能为空'),
		array('password', 'require', '密码不能为空'),
		array('repassword', 'password', '两次密码不致!', 2, 'confirm'),
		array('fcode', 'checkCode', '验证码不正确', 2, 'callback')
	);

	protected function checkCode($fcode){
		if(md5($fcode) != $_SESSION['verify']){
			return false;
		}

	}


	protected $patchValidate = true;

	protected $_auto = array(
			array('class_id','getClassId', 1, 'callback'),
			//array('password', 'md5', 1, 'function')
		);


	protected function getClassId(){
		return mt_rand(1,4);	
	}
} 
?>