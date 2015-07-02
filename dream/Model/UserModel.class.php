<?php
/*
@Describe:用户注册操作类
@Author:GongBiao
@Date:2015/07/01
*/
defined('ACC') || exit('ACC Denied');

class UserModel extends Model{
	protected $table = 'user';
	protected $pk = 'user_id';
	protected $fields = array('user_id', 'username', 'email', 'passwd', 'regtime', 'lastlogin');

	protected $_valid = array(
			array('username', 1, '用户名必须存在', 'require'),
			array('username', 0, '用户名必须是4-16个字符内', 'length', '4,16'),
			array('email', 1, 'email 非法', 'email'),
			array('passwd', 1, 'password不能为空', 'require')
		);

	protected $_auto = array(
			array('regtime', 'function', 'time')
		);

	/*
	用户注册
	*/

	public function reg($data){
		if($data['passwd']){
			$data['passwd'] = $this->enPasswd($data['passwd']);
		}

		return $this->add($data);
	}


	/*
	密码MD5加密
	*/

	protected function enPasswd($passwd){
		return md5($passwd);
	}

	/*
	根据用户查询用户信息
	*/

	public function checkUser($username){

		$sql = 'SELECT COUNT(*) FROM ' . $this->table . " WHERE username='" . $username . "'";
		return $this->db->getOne($sql);

	}

}
?>