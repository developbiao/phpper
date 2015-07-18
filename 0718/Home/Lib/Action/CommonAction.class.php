<?php
//登陆控制共公Action
class CommonAction extends Action{
	//权限把控
	public function _initialize(){

		if(!session('login')){
			$this->success('您还没有登陆!', U('Login/index')); //跳到登陆页面
			exit;
		}
	}
}
?>