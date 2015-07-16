<?php
/*
*@Describe:UserAction
*@Author:GongBiao
*@Date:2015/07/16
*/

class UserAction extends Action{

	public function index(){
		$_POST['username'] = 'xiaomin';
		$_POST['password'] = '123456';
		$_POST['submit'] = '提交';


		$arr = array(
			'username' => 'xiaoqing',
			'password' => '321',
			'submit' => '提交'
			);

		$user = M('Student');
		$user->create(); //数据对象默认是$_POST
		$user->regtime = time();

		$user->add();
		echo $user->getLastSql(); //获取最后一条插入的sql的语句
		exit;
		echo '<pre>';
		print_r($user);
		echo '<pre>';

	}

	//大M和大D方法测试
	public function test01(){
		$student = D('Class');
		$row = $student->find(2);

		echo '<pre>';
		print_r($row);
		echo '<pre>';

		echo $student->getLastSql();
		echo '<h3>', $student->getPk(),'<h3>';
	}

}
?>