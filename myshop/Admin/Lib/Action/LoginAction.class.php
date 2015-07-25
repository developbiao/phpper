<?php
/*
*@Describe:登陆模块
*@Author:GongBiao
*@Date:2015/07/25
*/
class LoginAction extends Action{
	
	//登陆	
	public function index(){

		$this->display();	
	}

	//验证码
	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify();

	}


	//检查验证登陆
	public function check(){
		$user = M('User');
		if(md5($_POST['fcode']) == $_SESSION['verify']){
			$_POST['password'] = md5($_POST['password']);
			if($rst = $user->where($_POST)->find()){
				$_SESSION['login'] = 1;
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['admin'] = $rst['admin'];

				if($rst['admin']){

					$this->success('登陆成功', U('Index/index'));
				}else{

					$this->error('您的权限不足!', U('index'));
				}
			}else{
				$this->error('用户名或密码不正确!', U('index'));
			}

		}else{
			$this->error('验证码有误!');
		}


	}

	public function logout(){
		setcookie(session_name(), '', time()-3600, '/');
		session_unset();
		session_destroy();

		$this->success('退出成功', U('index'));
	}
}
?>