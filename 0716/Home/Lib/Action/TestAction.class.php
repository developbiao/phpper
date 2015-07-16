<?php
/*
*@Describe:TestAction 数据库CURD操作测试
*@Author:GongBiao
*@Date:2015/07/16
*/
class TestAction extends Action{
	public function demo(){
		$user = M('Score');
		$user->where('id=2')->setField('score', 100);
		echo $user->getLastSql();

	}

	//传统查询测试
	public function demo03(){
		$user = M('People');
		//也可以使用query传统查询
		$rows = $user->query('SELECT * FROM people LEFT JOIN score ON people.id = score.uid ');
		echo '<pre>';
		print_r($rows);
		echo '</pre>';
		echo $user->getLastSql();

	}

	//join查询
	public function demo02(){
		$user = M('People');
		//左连接
		$rows = $user->join(' score ON people.id = score.uid')->select();
		echo '<pre>';
		print_r($rows);
		echo '</pre>';
		echo $user->getLastSql();

	}

	//连贯操作
	public function demo01(){
		$user = D('Student');
		//$user->Distinct(true)->field('username')->select();
		$rows = $user->field('username as name,regtime as 注册时间')->select();
		echo '<pre>';
		print_r($rows);
		echo '</pre>';
		echo $user->getLastSql();

	}
	//Update操作

	public function update(){
		$_POST['username'] = 'user777';
		$_POST['password'] = '789232dade';
		$_POST['id'] = 10; 

		$user = D('Student');
		if($user->create()){
			$user->save();
		}

	}

	//Find查找操作
	public function find(){
		$id = 23;
		$user = D('Student');
		//$rows = $user->find(23);
		$rows = $user->order('id')->find();
		echo '<pre>';
		print_r($rows);
		echo '</pre>';
	}

	//Selecte操作
	public function select(){
		$id = 23;
		$user = D('Student');
		//$rows = $user->select($id);
		$rows = $user->where("id={$id}")->select(); //条件查询
		echo '<pre>';
		print_r($rows);
		echo '</pre>';
	}


	//Delete操作
	public function delete(){
		$id = 24;
		$user = D('Student');
		// $user->delete($id);
		//$user->where("id={$id}")->delete(); //传统的写法
		$user->where(array('id' => $id))->delete();
	}

	//create操作
	public function insert(){

		$_POST['username'] = 'user11';
		$_POST['password'] = '123456';
		//$_POST['regtime'] = time();

		$user = D('Student');
		$user->create();
		$user->regtime = time();
		echo $user->add();
	}
}
?>