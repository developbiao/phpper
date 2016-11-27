<?php
/*
*@Describe:数据缓存测试
*@Author:GongBiao
*@Date:2015/07/17
*/
class UserAction extends Action{
	public function index(){
		if(!S('rows')){
		$user = M('User'); //取数据
		$rows = $user->select();
		S('rows', $rows, 10); //小模块缓存$rows
	}
		$this->rows = S('rows');
		$this->time = time();
		$this->display();
	}


	public function test(){
		$this->display();

	}
?>
