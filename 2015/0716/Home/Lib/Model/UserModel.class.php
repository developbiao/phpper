<?php
/*
@Describe:UserModel
@Author:GongBiao
@Date:2015/07/16
*/

class UserModel extends Model{
	protected $_map = array(
		'user' => 'username',
		'passwd' => 'password'
		);

	//自定义Model方法
	public function Pul(){
		echo 'UserModel...Function!';
	}

}
?>