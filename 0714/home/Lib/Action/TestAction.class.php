<?php
class TestAction extends Action{  //继承于Action
	public function hello(){
		echo 'Hello ThinkPHP!';
	}

	public function show(){ //模块里面的方法
		$user = M('User');
		$this->rows = $user->select();
		$this->display(); //调用tpl里面的模板
	}

	public function args(){
		echo '<pre>';
		print_r($_GET);
		echo '</pre>';
	}
}
?>