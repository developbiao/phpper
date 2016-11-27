<?php
/*
*@Describe:UserAction
*@Author:GongBiao
*@Date:2015/07/16
*/

class UserAction extends Action{

	public function index(){
		echo 'hello moto';
	}

	//自动验证测试
	public function test04(){
		$_SESSION['scode'] = 'abc';
		$_POST['username'] = 'user7';
		$_POST['password'] = '614319951';
		$_POST['repassword'] = '614319951';
		$_POST['vcode'] = 'abcd';
		$_POST['email'] = 'developbia@gmail.com';
		$_POST['num'] = '787';

		$stu = D('Student');
		if($stu->create()){
			$stu->add();
		}else{
			echo '<pre>';
			print_r($stu->getError()); 
			echo '<pre>';
			//echo $stu->getError(); //打印错误
		}
		/*
		echo '<pre>';
		print_r($stu);
		echo '<pre>';
		*/


	}

	//自动填充测试
	public function test03(){
		$_POST['user'] = 'user6';
		$_POST['passwd'] = '3276';

		$stu = D('Student');
		$stu->create();
		/*		
		echo '<pre>';
		print_r($stu);
		echo '<pre>';
		*/
		echo $stu->add();


	}

	//create创建数据对象智能过滤post表单不符字段
	public function test02(){
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