<?php
/*
*@Describe:TestAction
*@Author:GongBiao
*@Date:2015/07/15
*/
class TestAction extends Action{
	public function index(){
		$this->display();		
	}
	public function demo(){
		echo 'demo action function!';
	}
	public function test01(){
		echo 'this is test01 action function!';
	}

	public function SayHello(){
		echo '<h3>我正在努力的学习ThinkPHP,我想改变我的命运，注定不平凡！</h3>';
	}


	//URL路由测试
	public function router(){

		echo '<pre>';
		print_r($this->_get());
		echo '</pre>';

	}



}
?>