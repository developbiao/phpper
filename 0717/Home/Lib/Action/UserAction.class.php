<?php
/*
*@Describe:数据缓存测试
*@Author:GongBiao
*@Date:2015/07/17
*/
class UserAction extends Action{
	public function index(){
		$user = M('User'); //取数据
		$this->rows = $user->select();
		$this->display();
	}


	public function test(){
		$this->display();

	}
}

?>