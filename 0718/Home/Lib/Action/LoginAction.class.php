<?php
/*
*@Describe:LoginAction登陆
*@Author:GongBiao
*@Date:2015/07/18
*/

class LoginAction extends Action{

	public function index(){
		$this->display();
	}


	//登陆检查方法
	public function check(){
		$user = M('User');
		$_POST['password'] = md5($_POST['password']);
		$data = $user->where($_POST)->find(); //查数据库中有木有

		if($data){
			//查找到设置session
			session('username', $data['username']);
			session('login', 1);
			$this->success('登陆成功!', U('Index/index'));
		}else{
			$this->error('登陆错误', 'index');
		}
	}

	//用户退出

	public function logout(){
		//session销毁
		session(null);
		session('[destroy]');
		cookie(session_name(), null); //删除cookie

		$this->success('退出成功!', 'index');

	}

	public function test(){
	}

}
?>