<?php
/*
*@Describe:LoginAction登陆
*@Author:GongBiao
*@Date:2015/07/18
*/

class LoginAction extends Action{

	public function index(){
		if(session('login')){
			$this->success('您已经登陆过了', U('Index/index'), 5);
			exit;
		}
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


	//用户注册

	public function register(){
		$this->display();
	}

	//添加用户
	public function insert(){
		$user = D('User');
		$_POST['password'] = md5($_POST['password']);
		$_POST['repassword'] = md5($_POST['repassword']);
		if($user->create()){
			if($user->add()){
				session('username', $_POST['username']);
				session('login', 1);
				$this->success('注册成功！', U('Index/index'));
			}
		}else{
			echo '<pre>';
			print_r($user->getError());
			echo '<pre>';
		}
	}


	//生成图像验证码
	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify(4, 1, 'png', 50, 25);
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